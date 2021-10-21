const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const tabItem = $$('.tab-item');
const tabInfo = $$('.tab-info');

tabItem.forEach((tab,index) => {
    const info = tabInfo[index];
    tab.onclick = function(){
        const getTag = tab.getElementsByTagName('div');
        if($('.tab-item.nav-item')){
            $('.tab-item.nav-item').classList.remove('nav-item');
        }
        if($('.tab-info.active')){
            $('.tab-info.active').classList.remove('active');
        }
        tab.classList.add('nav-item');
        info.classList.add('active');
    }
});

