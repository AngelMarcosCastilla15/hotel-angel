export const $ = selector => document.querySelector(selector)

export const deleteExtension = (data) => {
  const newData = data.split(".").slice(0, -1)
  return newData.join("")
}
export const getCurrentLocation = () => {
  const { pathname } = location
  const currentLocation = pathname.split("/").pop()
  return deleteExtension(currentLocation)
}

export const setThemeLocalstorage = (theme) =>{
  localStorage.setItem("theme", theme )
}

export const getThemeLocalstorage = () => {
  try {
    const theme = localStorage.getItem("theme")
    return theme
  } catch (error) {
    return "ligth"
  }
}