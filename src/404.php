<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="res/style.main.css">
    <title>Page Not Found!</title>
  <style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap')
    * {
    padding: 0;
    margin: 0;

}

body {
    background: radial-gradient( circle, rgb(28, 27, 90) 0%, rgb(15, 18, 44) 30%, rgb(15, 13, 31) 100%);
    height: 100vh;
    color: #efefef;
}
.particles {
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
}
.particles span {
    position: absolute;
    top: 10%;
    left: 10%;
    display: block;
    content: '';
    width: 6px;
    height: 6px;
    background: rgba(255, 255, 255, 0.6);
    border-radius: 0.5rem;
    filter: blur(5px);

}
.particles span:nth-child(2) {
    top: 15%;
    left: 70%;
    filter: blur(3px);
}
.particles span:nth-child(3) {
    top: 70%;
    left: 40%;
    filter: blur(5px);
}
.particles span:nth-child(4) {
    top: 52%;
    left: 20%;
    filter: blur(4px);
}
.particles span:nth-child(5) {
    top: 74%;
    left: 90%;
    filter: blur(5px);
}
.particles span:nth-child(6) {
    top: 85%;
    left: 10%;
    filter: blur(7px);
}
.particles span:nth-child(7) {
    top: 67%;
    left: 79%;
    filter: blur(3px);
}
.particles span:nth-child(8) {
    top: 48%;
    left: 40%;
    filter: blur(4px);
}
.particles span:nth-child(9) {
    top: 45%;
    left: 30%;
    filter: blur(5px);
}
.particles span:nth-child(10) {
    top: 96%;
    left: 29%;
    filter: blur(4px);
}
.particles span:nth-child(11) {
    top: 55%;
    left: 89%;
    filter: blur(6px);
}
.particles span:nth-child(12) {
    top: 55%;
    left: 60%;
    filter: blur(7px);
}
main {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-family: Open Sans;
}
main h1{
    font-weight: normal;
}
main h1 {
    text-align: center;
    text-shadow: 0 0 5px #c3d168a2;
}
main div {
    margin-top: 2rem;
    text-align: center;
}
main div span{
    font-size: 5rem;
    line-height: 6rem;
    text-shadow: 0 0 7px #c3d168a2;
}
.circle {
    user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -webkit-user-select: none;
    display: inline-block;
    position: relative;
    width: 6rem;
    height: 6rem;
    text-shadow: none;
    background: #e6f1a3 radial-gradient(#f9ffd2, #ecff70);
    color: rgba(0, 0, 0, 0);
    border-radius: 50%;
    box-shadow: 0 0 7px #e7f1a3a2;
}
.circle:after {
    display: block;
    position: absolute;
    content: '';
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) rotate(-45deg);
    width: 10rem;
    height: 4rem;
    border-radius: 50%;
    border: 2px solid #fafafa;
    border-top: 0px solid #fafafa;
    border-bottom: 4px solid #fafafa;
    z-index: 2
}
.circle:before {
    display: block;
    position: absolute;
    content: '';
    top: 50%;
    left: 50%;
    background: #124;
    border-radius: 50%;
    width: 4px;
    height: 4px;
    transform-origin: 2.5rem 0;
    transform: translate(-2.5rem, 0) rotate(0deg);
    animation: circle-around 5s infinite linear;
}
@keyframes circle-around {
    0% { transform: translate(-2.5rem, 0) rotate(0deg); }
    100% { transform: translate(-2.5rem, 0) rotate(360deg); }
}
main p {
    margin-top: 3rem;
    text-align: center;
    text-shadow: 0 0 5px #c3d168a2;
}
main button {
    padding: 0.55rem 1.2rem;
    border: none;
    outline: none;
    appearance: none;
    border-radius: 1rem;
    background: rgb(17, 141, 44);
    color: #fafafa;
    box-shadow: 0 0 4px #e1f17859;
}
main button:hover {
    cursor: pointer;
}

  </style>
</head>
<body>
    
    <div id="particles" class="particles">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

    <main>
        <section>
            <h1>Page Not Found!</h1>
            <div>
                <span>4</span>
                <span class="circle">0</span>
                <span>4</span>
            </div>
            <p>We are unable to find the page<br>you're looking for.</p>
            <div>
               <a href="../../sltclothing/"> <button>Back to Home Page</button></a>
            </div>
        </section>
    </main>

</body>
</html>