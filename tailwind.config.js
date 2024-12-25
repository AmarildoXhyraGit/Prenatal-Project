/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        pink:"#E72A6E",
        gray:"#808080",
        graylight:"#807F7F",
        green:"#789A40",
        blue:"#44A1CB",
        gold:"#B38224",
        graytransparent:"#F2F0EC",
        bgray:"#E5E5E5",
        photoblue:"#2C5C89",
        bgmain:"#EFEFEF",
     
      
      },
      display:{
        hov:["group-hover"]},
      backgroundImage:{
        'bp': "url('/img/bluemobileprenatal.png')",
        'tp':"url('/img/trasparentprenatal.png')",
        'baby':"url('/img/baby.png')",
  
  },
  zIndex: {
    '51': '51',
  },
  width: {
    '128': '32rem',
    '256':'96rem'
  },
  margin: {
    '256px': '1000px',
  },
  backgroundSize: {
    '50%': '100%',
    '16': '4rem',
  },
  plugins: [],
}}}
