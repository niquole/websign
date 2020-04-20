<main class='container'>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <article class='content'>
    <p>OH no,</p>
    <p>You got lost in the <strong>404</strong> .</p>
    <p>
        <a href="/home">
            <button>Go back to the homepage.</button>
        </a>
    </p>
  </article>
</main>

<style>
body {
  margin: 0;
  font-size: 20px;
}

* {
  box-sizing: border-box;
}

.container {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  background: #8D7476;
  color: black;
  font-family: arial, sans-serif;
  overflow: hidden;
}

.content {
  position: relative;
  width: 600px;
  max-width: 100%;
  margin: 20px;
  background: white;
  padding: 60px 40px;
  text-align: center;
  box-shadow: -10px 10px 67px -12px rgba(0, 0, 0, 0.2);
  opacity: 0;
  animation: apparition 0.8s 1.2s cubic-bezier(0.39, 0.575, 0.28, 0.995) forwards;
}
.content p {
  font-size: 1.3rem;
  margin-top: 0;
  margin-bottom: 0.6rem;
  letter-spacing: 0.1rem;
  color: #595959;
}
.content p:last-child {
  margin-bottom: 0;
}
.content button {
  display: inline-block;
  margin-top: 2rem;
  padding: 0.5rem 1rem;
  border: 3px solid #595959;
  background: transparent;
  font-size: 1rem;
  color: #595959;
  text-decoration: none;
  cursor: pointer;
  font-weight: bold;
    transition: .2s;
}
.content button:hover {
    color: #8D7476;
    border: 3px dashed #8D7476;
}
.particle {
  position: absolute;
  display: block;
  pointer-events: none;
}
.particle:nth-child(1) {
  top: 35.5117139334%;
  left: 25.7171117705%;
  font-size: 11px;
  filter: blur(0.02px);
  animation: 37s float infinite;
}
.particle:nth-child(2) {
  top: 55.4744525547%;
  left: 24.4618395303%;
  font-size: 22px;
  filter: blur(0.04px);
  animation: 34s float infinite;
}
.particle:nth-child(3) {
  top: 52.2370012092%;
  left: 42.8432327167%;
  font-size: 27px;
  filter: blur(0.06px);
  animation: 22s floatReverse2 infinite;
}
.particle:nth-child(4) {
  top: 74.3063932449%;
  left: 23.3236151603%;
  font-size: 29px;
  filter: blur(0.08px);
  animation: 28s floatReverse2 infinite;
}
.particle:nth-child(5) {
  top: 43.4032059186%;
  left: 27.6953511375%;
  font-size: 11px;
  filter: blur(0.1px);
  animation: 36s floatReverse infinite;
}
.particle:nth-child(6) {
  top: 52.1525215252%;
  left: 64.1658440276%;
  font-size: 13px;
  filter: blur(0.12px);
  animation: 38s floatReverse2 infinite;
}
.particle:nth-child(7) {
  top: 24.6002460025%;
  left: 88.8450148075%;
  font-size: 13px;
  filter: blur(0.14px);
  animation: 32s float2 infinite;
}
.particle:nth-child(8) {
  top: 68.5990338164%;
  left: 41.8287937743%;
  font-size: 28px;
  filter: blur(0.16px);
  animation: 34s float2 infinite;
}
.particle:nth-child(9) {
  top: 64.039408867%;
  left: 49.4071146245%;
  font-size: 12px;
  filter: blur(0.18px);
  animation: 31s float infinite;
}
.particle:nth-child(10) {
  top: 62.2871046229%;
  left: 68.4931506849%;
  font-size: 22px;
  filter: blur(0.2px);
  animation: 35s floatReverse2 infinite;
}
.particle:nth-child(11) {
  top: 72.4602203182%;
  left: 17.6991150442%;
  font-size: 17px;
  filter: blur(0.22px);
  animation: 29s floatReverse2 infinite;
}
.particle:nth-child(12) {
  top: 76.2836185819%;
  left: 32.416502947%;
  font-size: 18px;
  filter: blur(0.24px);
  animation: 25s float2 infinite;
}
.particle:nth-child(13) {
  top: 31.8455971049%;
  left: 32.0699708455%;
  font-size: 29px;
  filter: blur(0.26px);
  animation: 35s float2 infinite;
}
.particle:nth-child(14) {
  top: 95.0980392157%;
  left: 45.2755905512%;
  font-size: 16px;
  filter: blur(0.28px);
  animation: 37s floatReverse2 infinite;
}
.particle:nth-child(15) {
  top: 13.7086903305%;
  left: 89.4788593904%;
  font-size: 17px;
  filter: blur(0.3px);
  animation: 21s float infinite;
}
.particle:nth-child(16) {
  top: 12.7450980392%;
  left: 62.9921259843%;
  font-size: 16px;
  filter: blur(0.32px);
  animation: 34s floatReverse2 infinite;
}
.particle:nth-child(17) {
  top: 44.5520581114%;
  left: 89.6686159844%;
  font-size: 26px;
  filter: blur(0.34px);
  animation: 32s float infinite;
}
.particle:nth-child(18) {
  top: 76.8856447689%;
  left: 9.7847358121%;
  font-size: 22px;
  filter: blur(0.36px);
  animation: 36s floatReverse infinite;
}
.particle:nth-child(19) {
  top: 6.862745098%;
  left: 82.6771653543%;
  font-size: 16px;
  filter: blur(0.38px);
  animation: 34s float infinite;
}
.particle:nth-child(20) {
  top: 64.8910411622%;
  left: 44.8343079922%;
  font-size: 26px;
  filter: blur(0.4px);
  animation: 26s float2 infinite;
}
.particle:nth-child(21) {
  top: 4.9200492005%;
  left: 21.7176702863%;
  font-size: 13px;
  filter: blur(0.42px);
  animation: 30s float2 infinite;
}
.particle:nth-child(22) {
  top: 86.6180048662%;
  left: 30.3326810176%;
  font-size: 22px;
  filter: blur(0.44px);
  animation: 32s floatReverse infinite;
}
.particle:nth-child(23) {
  top: 89.4289185905%;
  left: 16.6177908113%;
  font-size: 23px;
  filter: blur(0.46px);
  animation: 34s float2 infinite;
}
.particle:nth-child(24) {
  top: 50.1204819277%;
  left: 78.640776699%;
  font-size: 30px;
  filter: blur(0.48px);
  animation: 27s floatReverse2 infinite;
}
.particle:nth-child(25) {
  top: 49.4545454545%;
  left: 35.1219512195%;
  font-size: 25px;
  filter: blur(0.5px);
  animation: 23s float infinite;
}
.particle:nth-child(26) {
  top: 2.9055690073%;
  left: 20.4678362573%;
  font-size: 26px;
  filter: blur(0.52px);
  animation: 32s float2 infinite;
}
.particle:nth-child(27) {
  top: 65.2862362972%;
  left: 54.8481880509%;
  font-size: 21px;
  filter: blur(0.54px);
  animation: 27s floatReverse infinite;
}
.particle:nth-child(28) {
  top: 84.8192771084%;
  left: 38.8349514563%;
  font-size: 30px;
  filter: blur(0.56px);
  animation: 35s floatReverse infinite;
}
.particle:nth-child(29) {
  top: 26.5030674847%;
  left: 79.802955665%;
  font-size: 15px;
  filter: blur(0.58px);
  animation: 26s float2 infinite;
}
.particle:nth-child(30) {
  top: 87.0415647922%;
  left: 17.6817288802%;
  font-size: 18px;
  filter: blur(0.6px);
  animation: 25s floatReverse infinite;
}
.particle:nth-child(31) {
  top: 39.312039312%;
  left: 18.7376725838%;
  font-size: 14px;
  filter: blur(0.62px);
  animation: 35s float2 infinite;
}
.particle:nth-child(32) {
  top: 24.3902439024%;
  left: 66.6666666667%;
  font-size: 20px;
  filter: blur(0.64px);
  animation: 29s float2 infinite;
}
.particle:nth-child(33) {
  top: 73.4394124847%;
  left: 47.197640118%;
  font-size: 17px;
  filter: blur(0.66px);
  animation: 24s floatReverse2 infinite;
}
.particle:nth-child(34) {
  top: 50.9803921569%;
  left: 64.9606299213%;
  font-size: 16px;
  filter: blur(0.68px);
  animation: 36s floatReverse infinite;
}
.particle:nth-child(35) {
  top: 68.7960687961%;
  left: 1.9723865878%;
  font-size: 14px;
  filter: blur(0.7px);
  animation: 25s floatReverse infinite;
}
.particle:nth-child(36) {
  top: 55.5420219245%;
  left: 59.7453476983%;
  font-size: 21px;
  filter: blur(0.72px);
  animation: 22s floatReverse infinite;
}
.particle:nth-child(37) {
  top: 8.8779284834%;
  left: 7.9129574679%;
  font-size: 11px;
  filter: blur(0.74px);
  animation: 31s float infinite;
}
.particle:nth-child(38) {
  top: 24.5398773006%;
  left: 66.0098522167%;
  font-size: 15px;
  filter: blur(0.76px);
  animation: 38s floatReverse infinite;
}
.particle:nth-child(39) {
  top: 82.6568265683%;
  left: 76.011846002%;
  font-size: 13px;
  filter: blur(0.78px);
  animation: 36s floatReverse infinite;
}
.particle:nth-child(40) {
  top: 47.3489519112%;
  left: 27.6953511375%;
  font-size: 11px;
  filter: blur(0.8px);
  animation: 37s floatReverse2 infinite;
}
.particle:nth-child(41) {
  top: 30.1336573512%;
  left: 7.8201368524%;
  font-size: 23px;
  filter: blur(0.82px);
  animation: 40s float infinite;
}
.particle:nth-child(42) {
  top: 63.1319358816%;
  left: 78.1404549951%;
  font-size: 11px;
  filter: blur(0.84px);
  animation: 30s floatReverse infinite;
}
.particle:nth-child(43) {
  top: 90.0856793146%;
  left: 28.5152409046%;
  font-size: 17px;
  filter: blur(0.86px);
  animation: 38s floatReverse2 infinite;
}
.particle:nth-child(44) {
  top: 23.5294117647%;
  left: 72.8346456693%;
  font-size: 16px;
  filter: blur(0.88px);
  animation: 36s float infinite;
}
.particle:nth-child(45) {
  top: 36.053593179%;
  left: 13.7120470127%;
  font-size: 21px;
  filter: blur(0.9px);
  animation: 36s floatReverse2 infinite;
}
.particle:nth-child(46) {
  top: 73.3496332518%;
  left: 96.2671905697%;
  font-size: 18px;
  filter: blur(0.92px);
  animation: 33s floatReverse2 infinite;
}
.particle:nth-child(47) {
  top: 51.2077294686%;
  left: 91.439688716%;
  font-size: 28px;
  filter: blur(0.94px);
  animation: 22s floatReverse2 infinite;
}
.particle:nth-child(48) {
  top: 50.8557457213%;
  left: 85.4616895874%;
  font-size: 18px;
  filter: blur(0.96px);
  animation: 32s float2 infinite;
}
.particle:nth-child(49) {
  top: 56.2268803946%;
  left: 58.3580613254%;
  font-size: 11px;
  filter: blur(0.98px);
  animation: 26s float infinite;
}
.particle:nth-child(50) {
  top: 29.9155609168%;
  left: 24.2954324587%;
  font-size: 29px;
  filter: blur(1px);
  animation: 30s floatReverse infinite;
}
.particle:nth-child(51) {
  top: 43.2964329643%;
  left: 46.3968410661%;
  font-size: 13px;
  filter: blur(1.02px);
  animation: 27s float2 infinite;
}
.particle:nth-child(52) {
  top: 44.3908323281%;
  left: 32.0699708455%;
  font-size: 29px;
  filter: blur(1.04px);
  animation: 33s float infinite;
}
.particle:nth-child(53) {
  top: 67.5642594859%;
  left: 71.7797443461%;
  font-size: 17px;
  filter: blur(1.06px);
  animation: 24s floatReverse2 infinite;
}
.particle:nth-child(54) {
  top: 77.1084337349%;
  left: 38.8349514563%;
  font-size: 30px;
  filter: blur(1.08px);
  animation: 35s floatReverse2 infinite;
}
.particle:nth-child(55) {
  top: 63.2603406326%;
  left: 61.6438356164%;
  font-size: 22px;
  filter: blur(1.1px);
  animation: 23s floatReverse infinite;
}
.particle:nth-child(56) {
  top: 34.2717258262%;
  left: 27.5319567355%;
  font-size: 17px;
  filter: blur(1.12px);
  animation: 35s float infinite;
}
.particle:nth-child(57) {
  top: 11.6930572473%;
  left: 54.8481880509%;
  font-size: 21px;
  filter: blur(1.14px);
  animation: 40s float2 infinite;
}
.particle:nth-child(58) {
  top: 42.4607961399%;
  left: 84.5481049563%;
  font-size: 29px;
  filter: blur(1.16px);
  animation: 22s floatReverse2 infinite;
}
.particle:nth-child(59) {
  top: 29.2326431181%;
  left: 22.5269343781%;
  font-size: 21px;
  filter: blur(1.18px);
  animation: 30s float infinite;
}
.particle:nth-child(60) {
  top: 21.4634146341%;
  left: 42.1568627451%;
  font-size: 20px;
  filter: blur(1.2px);
  animation: 22s float2 infinite;
}
.particle:nth-child(61) {
  top: 29.8795180723%;
  left: 76.6990291262%;
  font-size: 30px;
  filter: blur(1.22px);
  animation: 27s floatReverse2 infinite;
}
.particle:nth-child(62) {
  top: 60.0985221675%;
  left: 69.1699604743%;
  font-size: 12px;
  filter: blur(1.24px);
  animation: 23s floatReverse infinite;
}
.particle:nth-child(63) {
  top: 16.3855421687%;
  left: 20.3883495146%;
  font-size: 30px;
  filter: blur(1.26px);
  animation: 25s floatReverse2 infinite;
}
.particle:nth-child(64) {
  top: 94.6859903382%;
  left: 16.5369649805%;
  font-size: 28px;
  filter: blur(1.28px);
  animation: 40s float2 infinite;
}
.particle:nth-child(65) {
  top: 3.8976857491%;
  left: 55.8276199804%;
  font-size: 21px;
  filter: blur(1.3px);
  animation: 29s float infinite;
}
.particle:nth-child(66) {
  top: 41.9512195122%;
  left: 40.1960784314%;
  font-size: 20px;
  filter: blur(1.32px);
  animation: 21s float infinite;
}
.particle:nth-child(67) {
  top: 30.3549571603%;
  left: 28.5152409046%;
  font-size: 17px;
  filter: blur(1.34px);
  animation: 37s floatReverse infinite;
}
.particle:nth-child(68) {
  top: 4.9079754601%;
  left: 9.8522167488%;
  font-size: 15px;
  filter: blur(1.36px);
  animation: 21s floatReverse infinite;
}
.particle:nth-child(69) {
  top: 28.3272283272%;
  left: 42.1982335623%;
  font-size: 19px;
  filter: blur(1.38px);
  animation: 26s float2 infinite;
}
.particle:nth-child(70) {
  top: 94.6859903382%;
  left: 80.7392996109%;
  font-size: 28px;
  filter: blur(1.4px);
  animation: 21s floatReverse infinite;
}
.particle:nth-child(71) {
  top: 47.4576271186%;
  left: 35.0877192982%;
  font-size: 26px;
  filter: blur(1.42px);
  animation: 40s floatReverse infinite;
}
.particle:nth-child(72) {
  top: 21.6482164822%;
  left: 90.8193484699%;
  font-size: 13px;
  filter: blur(1.44px);
  animation: 37s floatReverse2 infinite;
}
.particle:nth-child(73) {
  top: 94.4649446494%;
  left: 22.7048371175%;
  font-size: 13px;
  filter: blur(1.46px);
  animation: 36s float infinite;
}
.particle:nth-child(74) {
  top: 76.6584766585%;
  left: 78.8954635108%;
  font-size: 14px;
  filter: blur(1.48px);
  animation: 39s float infinite;
}
.particle:nth-child(75) {
  top: 45.9657701711%;
  left: 50.0982318271%;
  font-size: 18px;
  filter: blur(1.5px);
  animation: 22s floatReverse2 infinite;
}
.particle:nth-child(76) {
  top: 82.8258221681%;
  left: 0.9794319295%;
  font-size: 21px;
  filter: blur(1.52px);
  animation: 40s floatReverse2 infinite;
}
.particle:nth-child(77) {
  top: 3.9119804401%;
  left: 77.6031434185%;
  font-size: 18px;
  filter: blur(1.54px);
  animation: 21s floatReverse infinite;
}
.particle:nth-child(78) {
  top: 52.1739130435%;
  left: 26.2645914397%;
  font-size: 28px;
  filter: blur(1.56px);
  animation: 37s float infinite;
}
.particle:nth-child(79) {
  top: 74.6012269939%;
  left: 50.2463054187%;
  font-size: 15px;
  filter: blur(1.58px);
  animation: 38s float2 infinite;
}
.particle:nth-child(80) {
  top: 42.8223844282%;
  left: 58.7084148728%;
  font-size: 22px;
  filter: blur(1.6px);
  animation: 30s floatReverse2 infinite;
}

@keyframes apparition {
  from {
    opacity: 0;
    transform: translateY(100px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
@keyframes float {
  0%,
	100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(180px);
  }
}
@keyframes floatReverse {
  0%,
	100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-180px);
  }
}
@keyframes float2 {
  0%,
	100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(28px);
  }
}
@keyframes floatReverse2 {
  0%,
	100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-28px);
  }
}

</style>
