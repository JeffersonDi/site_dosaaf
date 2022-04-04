const btn_search_show = document.querySelector('.btn_search_show');
const in_search = document.querySelector('.in_search');
const search = document.querySelector('.search');
const body = document.querySelector('body');
const btn_search = document.querySelector('.btn_search');
/*$(function (){
    $('#btn_search').click(function (){
        $('.in_search').show();
    })
})*/
/*
body.addEventListener('click', function(){
    $('.in_search').hide();
});
/*search.addEventListener('click', function(e)
    e.stopPropagation();
    this.classList.add('search_active');
});

body.addEventListener('click', function(){
    search.classList.remove('search_active');
});*/
search.addEventListener('click', function (e){
    e.stopPropagation();
    this.classList.add('in_search_active');
    btn_search_show.classList.add('btn_search_show_hide');
    btn_search.classList.add('btn_search_find');
});
body.addEventListener('click', function(){
    search.classList.remove('in_search_active');
    btn_search_show.classList.remove('btn_search_show_hide');
    btn_search.classList.remove('btn_search_find');
});