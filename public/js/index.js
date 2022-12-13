let book_btn = document.querySelector("#book")
if(book_btn)book_btn.onclick = () => location = "bookshelf.php"

let about_btn = document.querySelector("#about")
let drop_down = document.querySelector("#about_dropdown")


if(drop_down)drop_down.style.display = "none"
if(about_btn)about_btn.onclick = () => {
    if (drop_down.style.display == "none") return drop_down.style.display = "flex"
    drop_down.style.display = "none"
}

let description_btn = document.querySelector("#description_btn")
let vision_btn = document.querySelector("#vision_btn")
let mission_btn = document.querySelector("#mission_btn")

if(description_btn)description_btn.onclick = () => location = "/description"
if(mission_btn)mission_btn.onclick = () => location = "/mission"
if(vision_btn)vision_btn.onclick = () => location = "/vision"

let logout_btn = document.querySelector("#logout")
if(logout_btn)logout_btn.onclick = ()=> location = "/account_type_select"

let home_btn = document.querySelector("#home")
if(home_btn)home_btn.onclick = ()=> location = "/home" 