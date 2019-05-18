let map_id = document.getElementById('container');
if (map_id) {
    let map = new AMap.Map('container', {
        center: [114.005383, 22.893244],
        zoom: 13
    });
    let marker = new AMap.Marker({
        position: new AMap.LngLat(114.005383, 22.893244),
        title: '裕元工业园精成二路灵狮小镇C栋三层C313-316号'
    })
    marker.setLabel({
        offset: new AMap.Pixel(20, -10),
        content: '<div style="font-size:16px;text-align:center"><p>广东省东莞市黄江镇裕元工业园</p><br><p>精成二路灵狮小镇C栋三层C313-316号</p></div>',
        direction: 'top'
    });
    map.add(marker)
}
