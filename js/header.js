export function header() {
    let elem = document.querySelector('.sidenav');
    let instance = M.Sidenav.init(elem, {});

    console.log('instance', instance);

    let linkSidenav = document.querySelectorAll('#greg-mobile a');

    linkSidenav.forEach((item) => {
        item.addEventListener('click', () => {
            instance.close();
        });
    });
}