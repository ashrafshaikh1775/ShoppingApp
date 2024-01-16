
function navigate_links(view , login , signup){
document.querySelector('#view').style.display=view;
document.querySelector('#login').style.display=login;
document.querySelector('#signup').style.display=signup;
}
document.querySelector('#home').style.display='inline-block';
document.querySelector('#home').addEventListener('click' , ()=>{
    location.replace(navigate_at_home_page);
    });
function set_path_to_navigate_links(link2){

document.querySelector('#view').addEventListener('click' , ()=>{
    location.replace(link2);
    });
}