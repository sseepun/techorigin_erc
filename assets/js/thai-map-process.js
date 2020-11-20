$(function(){ 'use strict';

    var width = 400,
        height = 600;

    var spec = {
        animTime: 1200,
        projection: d3.geoMercator().scale(2250)
            .rotate([-100.6331, -13.2])
            .translate([width*0.43, height*0.49]), 
        currentScale: 1
    };
    spec.geoPath = d3.geoPath().projection(spec.projection);

    var svg = d3.select('#thai-map').append('svg')
        .attr('width', '100%').attr('opacity', 1)
        .attr('height', '100%').attr('preserveAspectRatio', 'xMidYMid')
        .attr('viewBox', '0 0 '+width+' '+height);
    var workspace = svg.append('g').attr('class', 'workspace')
        .attr('transform', 'translate(0,0)scale(1)');

    workspace.selectAll('path.province').data(thaiMap.features).enter().append('path')
        .attr('class', function(d){ return propertyToClass(d.properties); })
        .attr('id', function(d){ return stringToId(d.properties.name); })
        .attr('d', spec.geoPath)
        .style('stroke-width', 0.0001*width);

    function propertyToClass(p){
        return 'province region-'+p.region;
    }
    function stringToId(name){
        return name.replace(/\\| |\//g, '').replace(/\./g, '');
    }

    function selectRegion(region=false){
        if(!region){
            workspace.transition().duration(spec.animTime)
                .attr('transform', 'translate(0,0)scale(1)');
            workspace.classed('active', false);
            workspace.selectAll('.active').classed('active', false);
        }else{
            workspace.classed('active', true);
            workspace.selectAll('.active').classed('active', false);

            var regionPaths = workspace.selectAll('.province.region-'+region);
            regionPaths.classed('active', true);
            
            var pRect = {
                x: 0, x2: 0, 
                y: 0, y2: 0, 
                width: 0, height: 0
            };
            regionPaths.nodes().forEach(function(node, i){
                var rect = node.getBBox(),
                    x2 = rect.x + rect.width,
                    y2 = rect.y + rect.height;
                if(i==0){
                    pRect = {
                        x: rect.x,
                        x2: x2,
                        y: rect.y,
                        y2: y2
                    };
                }else{
                    pRect = {
                        x: rect.x < pRect.x ? rect.x: pRect.x,
                        x2: x2 > pRect.x2 ? x2: pRect.x2,
                        y: rect.y < pRect.y ? rect.y: pRect.y,
                        y2: y2 > pRect.y2 ? y2: pRect.y2
                    }; 
                }
            });
            pRect.width = pRect.x2 - pRect.x;
            pRect.height = pRect.y2 - pRect.y;

            var scale = d3.min([1.0*width/pRect.width, 1.0*height/pRect.height]);
            var xOff = -pRect.x*scale + (width - pRect.width*scale)/2,
                yOff = -pRect.y*scale + (height - pRect.height*scale)/2;
            spec.currentScale = scale;
                
            workspace.transition().duration(spec.animTime)
                .attr('transform', 'translate('+xOff+','+yOff+')scale('+scale+')');

            var textContainer = $('.thai-map-container > .option > h4');
            if(region==1) textContainer.html('ภาคเหนือ');
            else if(region==2) textContainer.html('ภาคตะวันออกเฉียงเหนือ');
            else if(region==3) textContainer.html('ภาคกลาง');
            else if(region==4) textContainer.html('ภาคตะวันออก');
            else if(region==5) textContainer.html('ภาคตะวันตก');
            else if(region==6) textContainer.html('ภาคใต้');
            else if(region==7) textContainer.html('กรุงเทพมหานคร');
        }
    }
    if(focusRegion) selectRegion(focusRegion);

    function selectProvince(province=false){
        if(!province){
            workspace.transition().duration(spec.animTime)
                .attr('transform', 'translate(0,0)scale(1)');
            workspace.classed('active', false);
            workspace.selectAll('.active').classed('active', false);
        }else{
            workspace.classed('active', true);
            workspace.selectAll('.active').classed('active', false);

            var textContainer = $('.thai-map-container > .option > h4');
            var provinceId = stringToId(province),
                provincePath = workspace.select('.province#'+provinceId)
                    .classed('active', function(d){
                        textContainer.html('จังหวัด'+d.properties.thai_name);
                        return true;
                    });

            var pRect = provincePath.node().getBBox(),
                scale = d3.min([1.0*width/pRect.width, 1.0*height/pRect.height]);
            var xOff = -pRect.x*scale + (width - pRect.width*scale)/2,
                yOff = -pRect.y*scale + (height - pRect.height*scale)/2;
            spec.currentScale = scale;
                
            workspace.transition().duration(spec.animTime)
                .attr('transform', 'translate('+xOff+','+yOff+')scale('+scale+')');
        }
    }
    if(focusProvince) selectProvince(focusProvince);

    if(!focusRegion && !focusProvince) $('.thai-map-container > .option').remove();

});
