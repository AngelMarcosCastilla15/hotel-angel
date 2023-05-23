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