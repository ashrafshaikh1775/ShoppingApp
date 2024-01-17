if (name_of_page == 'main_page') {
    navigate_links('inline-block', 'none', 'inline-block', 'inline-block');
    set_path_to_navigate_links('main_page', 'view_product', 'main_folder/login_page', 'main_folder/signup_page');
} else if (name_of_page == 'view_product') {
    navigate_links('inline-block', 'inline-block', 'inline-block', 'inline-block');
    set_path_to_navigate_links('../main_page', 'view_product', 'login_page', 'signup_page');
}
else {
    if (return_to_this_Page == './view_product') {
        navigate_links('inline-block', 'inline-block', 'inline-block', 'inline-block');
        set_path_to_navigate_links('../main_page', 'view_product', 'login_page', 'signup_page');
    }
    else {
        navigate_links('inline-block', 'none', 'inline-block', 'inline-block');
        set_path_to_navigate_links('../main_page', 'view_product', 'login_page', 'signup_page');
    }
}
function navigate_links(home, view, login, signup) {
    document.querySelector('#home').style.display = home;
    document.querySelector('#view').style.display = view;
    document.querySelector('#login').style.display = login;
    document.querySelector('#signup').style.display = signup;
}

function set_path_to_navigate_links(link1, link2, link3, link4) {

    document.querySelector('#home').addEventListener('click', () => {
        location.replace(link1);
    });
    document.querySelector('#view').addEventListener('click', () => {
        location.replace(link2);
    });
    document.querySelector('#login').addEventListener('click', () => {
        location.replace(link3);
    });
    document.querySelector('#signup').addEventListener('click', () => {
        location.replace(link4);
    });
}