const search = document.getElementById("search-toggle");
const back = document.getElementById("back");
const targetDiv = document.getElementById("bar-div");
const targetStyle = getComputedStyle(targetDiv);
const targetDisplay = targetStyle.getPropertyValue("display");

back.onclick = function () {
  if (targetDisplay === "flex") {
    targetDiv.classList.remove("show");
  }
  console.log(targetDisplay);
};

search.onclick = function () {
  if (targetDisplay === "flex") {
    targetDiv.classList.add("show");
  }
};

// console.log(targetStyle.getPropertyValue("display"));
