let map_id = document.getElementById('container');
if (map_id) {
    let map = new AMap.Map('container', {
        center: [114.005383, 22.893244],
        zoom: 13
    });
    let markerOperationCenter = new AMap.Marker({
        position: new AMap.LngLat(113.982284, 22.907506),
        title: '运营中心'
    });
    let markerProductCenter = new AMap.Marker({
        position: new AMap.LngLat(114.005383, 22.893244),
        title: '生产中心'
    })
    markerProductCenter.setLabel({
        offset: new AMap.Pixel(-15, -10),
        content: '<div style="font-size:16px;text-align:center"><p>运营中心</p></div>',
        direction: 'top'
    });
    markerOperationCenter.setLabel({
        offset: new AMap.Pixel(-15, -10),
        content: '<div style="font-size:16px;text-align:center"><p>生产中心</p></div>',
        direction: 'top'
    })
    let markList = [markerOperationCenter, markerProductCenter]
    map.add(markList)
}
