import axios from "axios";

let loadmoreForm = document.querySelector("#loadmore"),
  loadmoreBtn = document.querySelector(".btn-loadmore"),
  features = document.querySelector("#loop-posts > .container > .row");

const loadmore = (e) => {
  e.preventDefault();
  let url = loadmore_params.ajaxurl,
    data = new FormData(),
    max_page_posts = e.target.attributes.total.value;

  data.append("action", "loadmore");
  data.append("query", loadmore_params.posts);
  data.append("page", loadmore_params.current_page);

  axios
    .post(url, data)
    .then(function (response) {
      loadmore_params.current_page++;
      if (loadmore_params.current_page == max_page_posts) loadmoreForm.remove();
      features.insertAdjacentHTML("beforeend", response.data);
    })
    .catch(function (error) {
      console.log(error);
    });
};

if (loadmoreForm) loadmoreBtn.addEventListener("click", loadmore);
