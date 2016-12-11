/**
 * Created by xiaowen on 2016/12/12.
 */

function searchInfo(){
    var keyword = $.trim($('input[name="keyword"]').val());

    if(!keyword){
        //layer.alert('请输入搜索关键字！');
       alert('请输入搜索关键字！');
        return false;
    }

    window.location.href = "<{:U('Index/search')}>" + '?keyword='+keyword;
}
