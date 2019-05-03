window.init = function () {
    var map = new AMap.Map('container', {
        center: [114.005383, 22.893244],
        zoom: 13
    });
    var marker = new AMap.Marker({
        position: new AMap.LngLat(114.005383, 22.893244),
        title: '裕元工业园精成二路灵狮小镇C栋三层C313-316号'
    })
    marker.setLabel({
        offset: new AMap.Pixel(20, -10),
        content: '<div style="font-size:16px">精成二路灵狮小镇C栋三层C313-316号</div>',
        direction: 'top'
    });
    map.add(marker)
}


