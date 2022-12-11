let books = document.querySelectorAll(".book");
let book_prev = document.querySelector("#book_prev"),
  book_prev_description = document.querySelector("#description"),
  book_prev_img = document.querySelector("#book_prev div img");
  book_prev_author = document.querySelector("#author")
  book_prev_book = document.querySelector('#book');

book_prev.onclick = (ev) => hide_pop(book_prev, ev);

[...books].forEach((el) => {
  el.onclick = () => show_book_popup(book_prev, el);
});

function show_book_popup(popup, el) {
  let description = el.dataset.description,
      img = el.dataset.img,
      author = el.dataset.author,
      book = el.dataset.book
      

  book_prev_img.src = img
  book_prev_description.innerText = description;
  book_prev_author.innerText = author 
  book_prev_book.value = book

  show_pop(popup);
}

function show_pop(el) {
  el.style.display = "block";
}

function hide_pop(el, ev) {
  if (ev.target == el) el.style.display = "none";
}