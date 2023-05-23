import {$, getCurrentLocation} from "./utils.js"

document.addEventListener("DOMContentLoaded", ()=>{
  const currentLocation = getCurrentLocation()
  const $itemActive =  $(`[data-url=${currentLocation}]`)
  $itemActive.classList.add("active")
})