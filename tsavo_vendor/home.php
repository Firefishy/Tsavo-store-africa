<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css'>
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;0,600;0,700;0,900;1,200;1,300;1,500;1,700;1,800;1,900&display=swap");
:root {
  font-size: 16px;
  --text-primary: #ffffff;
  --text-secondary: #9C15A1;
  --bg-primary: #9C15A1;
  --bg-secondary: #fff;
  --transition-speed: 200ms;
}
.bc-span-red {
  background-color: #f47885 !important;
}
.bc-span-orange {
  background-color: #ffb333 !important;
}
.bc-span-cyn {
  background-color: #9fe5f3 !important;
}
.bc-span-white {
  background-color: #f5f5fb !important;
}
.bc-orange {
  background-color: #ffaf28 !important;
}
.bc-cyn {
  background-color: #89e0f0 !important;
}
.bc-red {
  background-color: #f96776 !important;
}
.bc-white {
  background-color: #fff;
}
.bc-blue-dark {
  background-color: #9C15A1;
}
.bd-orange {
  border: 0.5px solid #ffaf28;
}
.bd-cyn {
  border: 0.5px solid #89e0f0;
}
.bd-red {
  border: 0.5px solid #f96776;
}
.bd-blue {
  border: 0.5px solid #8b8de6;
}
.c-orange {
  color: #ffaf28;
}
.c-cyn {
  color: #89e0f0;
}
.c-red {
  color: #f96776;
}
.c-white {
  color: #fff;
}
.c-blue {
  color: #8b8de6;
}
.c-blue-dark {
  color: #9C15A1;
}
.c-grey {
  color: #d7d7d8 !important;
}
.mx-5 {
  margin: 0 5px;
}
.btn-tsavo{
    background-color:#B806B8;
	color:#FFF;
}
.btn-tsavo:hover {
background-color: #8C068C; 
color:#FFF;
}
/* === Body === */
body {
  color: black;
  margin: 0;
  padding: 0;
  background-color: #fff;
  font-family: "Poppins";
  width:100%;
  background: linear-gradient(to right top, hsla(270, 50%, 8%, .5), hsla(270, 50%, 8%, .6) 20%, hsla(270, 50%, 8%, .1)), linear-gradient(to right bottom, hsl(270, 50%, 8%), transparent 66%), linear-gradient(to bottom, transparent, hsl(270, 50%, 8%) 56%), url("https://images.unsplash.com/photo-1581866327034-c4579d75eb63?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=500&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=1215");
  background-size:100%;
}
body::-webkit-scrollbar {
  all: unset;
  width: 0.25rem;
}
body::-webkit-scrollbar-track {
  background-color: #1e1e24;
}
.page-transition {
  display: none;
}
/* === navbarr === */
.navbarr {
  position: fixed;
  background-color: var(--bg-primary);
  transition: width 200ms ease;
  border-top-right-radius: 22px;
  border-bottom-right-radius: 22px;
}
.navbarr-nav {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  height: 100%;
}
.nav-item {
  width: 100%;
}
.logout-btn,
.nav-link {
  display: flex;
  align-items: center;
  height: 5rem;
  color: var(--text-primary);
  text-decoration: none;
  transition: var(--transition-speed);
}
.logout-btn i,
.nav-link i {
  min-width: 2rem;
  margin: 0 1.5rem;
}
.link-text {
  display: none;
  margin-left: 1rem;
}
.logo {
  font-weight: 100;
  margin: 2rem 0 3rem;
  text-align: center;
  color: var(--text-primary);
  font-size: 0.85rem;
}
.logo span {
  font-weight: 500;
}
/* === Main === */
main {
  margin-left: 5rem;
  padding: 1rem 0 0 1rem;
  display: flex;
}
main section {
  height: 97vh;
}
.main {
  flex-basis: 55%;
  margin: 0 3rem 0 2rem;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
.main .baner {
  background-color: #ffa000;
  padding-left: 3rem;
  border-radius: 22px;
  width: 100%;
  height: 200px;
  box-sizing: border-box;
  margin-top: 1rem;
  justify-content: space-between;
  display: flex;
  align-items: center;
}
.main .baner .baner-text {
  color: var(--text-primary);
  margin: 3rem 0;
}
.main .baner .baner-text p {
  font-weight: 200;
}
.main .baner .baner-text h1 {
  font-size: 25px;
  font-weight: 400;
}
.main .baner .baner-png img {
  width: 40%;
  height: 100%;
}
.main .month {
  width: 100%;
}
.main .month .month-header {
  display: flex;
  height: 70px;
  justify-content: space-between;
  flex-direction: row;
  align-items: baseline;
  border-bottom: 0.5px solid #f5f5fa;
}
.main .month .month-header .paginate-month {
  display: flex;
  align-items: center;
}
.main .month .month-header .paginate-month span {
  display: flex;
  background-color: #f45564;
  border-radius: 14px;
  width: 40px;
  height: 22px;
  align-items: center;
  justify-content: center;
}
.main .month .month-header .paginate-month span i.fa-chevron-left {
  color: #f7858f;
}
.main .month .month-header .paginate-month span i {
  font-size: 9px;
  color: #fff;
  margin: 0 4px;
}
.main .month .month-header .paginate-month p,
.main .weekly .weekly-header p,
.main .update .update-header p,
.statistics .statistics-body .function p,
.statistics .statistics-body .cleaning p {
  margin-right: 15px;
  font-weight: 400;
  color: #9C15A1;
}
.main .month .month-header .name-month {
  background-color: #f8f8fd;
  width: 80px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 5px;
  box-sizing: border-box;
  padding: 5px;
  text-align: center;
}
.main .month .month-header .name-month i {
  font-size: 14px;
  color: #4e4b82;
}
.main .month .month-header .name-month span {
  font-weight: 400;
  font-size: 11px;
  margin-left: 5px;
  color: #cccbdd;
}
.main .month .month-body {
  display: flex;
  justify-content: space-around;
  align-items: center;
  box-sizing: border-box;
  padding: 1rem 0;
  border-bottom: 0.5px solid #f5f5fa;
}
.main .month .month-body .month-day {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 0.25rem 0.65rem;
  border-radius: 12px;
  box-sizing: border-box;
}
.main .month .month-body .month-day p {
  color: #9C15A1;
  font-size: 11px;
  font-weight: 300;
}
.main .month .month-body .month-day span {
  color: #aaa9c2;
  font-size: 12px;
  font-weight: 400;
}
.main .month .month-body .month-day span.circle {
  width: 5px;
  height: 5px;
  display: block;
  border-radius: 50%;
  color: #000;
  margin-top: 5px;
}
.main .month .month-body .month-day.active {
  background-color: #f96776;
  -webkit-box-shadow: 0px 3px 17px -2px rgba(249, 103, 118, 1);
  -moz-box-shadow: 0px 3px 17px -2px rgba(249, 103, 118, 1);
  box-shadow: 0px 3px 17px -2px rgba(249, 103, 118, 1);
}
.main .month .month-body .month-day.active span,
.main .month .month-body .month-day.active p {
  color: #fff;
}
.main .weekly {
  width: 100%;
  display: flex;
  margin: 1rem 0;
  flex-direction: column;
}
.main .weekly .weekly-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
}
.main .weekly .link a {
  font-size: 12px;
  text-decoration: none;
  color: #aaa9c2;
  font-weight: 400;
}
.main .weekly .link a.active {
  font-size: 13px;
  color: #4e4b82;
  font-weight: 500;
}
.main .weekly .weekly-body {
  width: 100%;
  display: flex;
  height: 150px;
  justify-content: space-between;
}
.main .weekly .weekly-body .item {
  align-items: center;
  display: flex;
  flex-direction: column;
  padding: 1rem 2rem;
  border-radius: 12px;
  border: 0.5px solid #f7f7fa;
  box-sizing: border-box;
}
.main .weekly .weekly-body .item span {
  padding: 0.25rem 0.5rem;
  border-radius: 12px;
  transition: background-color 0.4s ease-in-out, color 0.4s ease-in-out;
}
.main .weekly .weekly-body .item p {
  font-size: 11px;
  font-weight: 400;
  color: #8684a9;
}
.main .weekly .weekly-body .item .item-size {
  font-size: 16px;
  color: #9C15A1;
  margin: 0;
  transition: transform 0.4s;
}
.main .weekly .weekly-body .item:hover .item-size {
  background-color: #ffaf28;
  transform: scale(1.09);
  padding: 1rem 1.5rem;
  border-radius: 12px;
  color: #fff;
}
.main .weekly .weekly-body .item:hover span {
  background-color: #ffaf28;
}
.main .weekly .weekly-body .item:nth-child(2):hover .item-size,
.main .weekly .weekly-body .item:nth-child(2):hover span {
  background-color: #f96776;
}
.main .weekly .weekly-body .item:nth-child(3):hover .item-size,
.main .weekly .weekly-body .item:nth-child(3):hover span {
  background-color: #89e0f0;
}
.main .weekly .weekly-body .item:nth-child(4):hover .item-size,
.main .weekly .weekly-body .item:nth-child(4):hover span {
  background-color: #8b8de6;
}
.main .weekly .weekly-body .item:hover span i {
  color: #fff;
}
.main .update {
  width: 100%;
}
.main .update .update-body {
  width: 100%;
  display: flex;
  justify-content: space-between;
}
.main .update .update-body .system,
.main .update .update-body .application {
  width: 45%;
  height: 100px;
  border-radius: 25px;
  display: flex;
  -webkit-box-shadow: 5px 3px 8px 0px rgba(247, 247, 250, 1);
  -moz-box-shadow: 5px 3px 8px 0px rgba(247, 247, 250, 1);
  box-shadow: 5px 3px 8px 0px rgba(247, 247, 250, 1);
  box-sizing: border-box;
  padding: 0 1rem;
  align-items: center;
}
.main .update .update-body .system hr,
.main .update .update-body .application hr {
  height: 70%;
  color: #c6c2e8;
  border-width: 0.5px !important;
  opacity: 0.3;
}
.main .update .update-body .update-content h3 {
  font-size: 13px;
  font-weight: 400;
}
.main .update .update-body .update-content p {
  font-size: 10px;
}
.main .update .update-body .update-charts,
.main .update .update-body .update-content {
  width: 35%;
}
.main .update .update-body .update-charts {
  display: flex;
  flex-direction: column;
  overflow: hidden;
  align-items: center;
  height: 100px;
  box-sizing: border-box;
  margin-left: auto;
}
.circle-chart__circle {
  animation: circle-chart-fill 2s reverse; /* 1 */
  transform: rotate(-90deg); /* 2, 3 */
  transform-origin: center; /* 4 */
}
.circle-chart__circle--negative {
  transform: rotate(0deg) scale(1, -1); /* 1, 2, 3 */
}

.circle-chart__info {
  animation: circle-chart-appear 2s forwards;
  opacity: 0;
  transform: translateY(0.3em);
}
.circle-chart__percent:nth-child(2) {
  fill: white;
}

.statistics {
  display: grid;
  grid-template-rows: 0.5fr 3fr;
  width: 100%;
  padding: 1rem 0 1rem 1rem;
}
.statistics .statistics-header {
  width: 100%;
  padding-right: 1rem;
}
.statistics .statistics-header div {
  display: flex;
  align-items: center;
  flex-direction: row-reverse;
  padding-right: 1rem;
  box-sizing: border-box;
}
.statistics .statistics-header a {
  text-decoration: none;
  color: #534f85;
  margin: 0 10px;
}
.statistics .statistics-header a img {
  width: 30px;
  height: 30px;
  object-fit: cover;
  border-radius: 10px;
}
.statistics .statistics-header a i {
  font-size: 20px;
}
.statistics .statistics-header a.active {
  position: relative;
}
.statistics .statistics-header a.active::before {
  content: "";
  position: absolute;
  width: 5px;
  height: 5px;
  border-radius: 50%;
  background-color: #f96776;
  right: 0;
}
.statistics .statistics-body {
  background-color: #f6f6fc;
  border-top-left-radius: 40px;
  display: grid;
  grid-template-rows: 0.8fr 1fr;
  padding-left: 2.5rem;
}
.statistics .statistics-body .function {
  box-sizing: border-box;
  margin-top: 1.5rem;
}
.statistics .statistics-body .function .fn {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: 1fr 1fr;
  padding-right: 2rem;
  gap: 20px;
}
.statistics .statistics-body .function .fn div {
  height: 110px;
  border-radius: 23px;
  background-color: #fff;
  box-sizing: border-box;
  padding: 0.2rem 0;
}
.statistics .statistics-body .function .fn .last_child {
  background-color: #f6f6fc;
  border: 1px solid #cfcdee;
}
.statistics .statistics-body .function .fn .last_child i {
  color: #bfbdda;
}
.statistics .statistics-body .function .fn div .bc-fn {
  border-radius: 10px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 50px;
  width: 85%;
  margin: 0 auto;
  padding: 0 0.5rem;
}
.statistics .statistics-body .function .fn div .bc-fn span {
  padding: 0.5rem;
  color: #fff;
  border-radius: 10px;
}

.statistics .statistics-body .function .fn div .fn-description {
  display: flex;
  justify-content: space-between;
  background-color: transparent;
  align-items: center;
  height: 50px;
  width: 85%;
  margin: 0 auto;
  padding: 0 0.5rem;
}
.statistics .statistics-body .function .fn div .fn-description p {
  color: #6b6896;
  font-size: 11px;
}
.statistics .statistics-body .function .fn div .fn-description .toggle-btn {
  width: 35px;
  height: 20px;
  background-color: #e4e4f6;
  display: flex;
  align-items: center;
  border-radius: 30px;
  padding: 5px;
  transition: all 300ms ease-in-out;
}
.statistics
  .statistics-body
  .function
  .fn
  div
  .fn-description
  .toggle-btn
  > .inner-circle {
  width: 12px;
  height: 12px;
  background-color: #bbb9d9;
  border-radius: 50%;
  transition: all 300ms ease-in-out;
}
.statistics
  .statistics-body
  .function
  .fn
  div
  .fn-description
  .toggle-btn:hover {
  cursor: pointer;
}
.statistics
  .statistics-body
  .function
  .fn
  div:last-child
  .fn-description
  .toggle-btn:hover {
  cursor: inherit;
}
.statistics
  .statistics-body
  .function
  .fn
  div
  .fn-description
  .toggle-btn.bc-toggle-orange {
  background-color: #ffeccc;
}
.statistics
  .statistics-body
  .function
  .fn
  div
  .fn-description
  .toggle-btn.bc-toggle-red {
  background-color: #fcdde1;
}
.statistics
  .statistics-body
  .function
  .fn
  div
  .fn-description
  .toggle-btn.bc-toggle-cyn {
  background-color: #e7f9fc;
}
.statistics
  .statistics-body
  .function
  .fn
  div
  .fn-description
  .toggle-btn.bc-toggle-orange
  > .inner-circle,
.statistics
  .statistics-body
  .function
  .fn
  div
  .fn-description
  .toggle-btn.bc-toggle-red
  > .inner-circle,
.statistics
  .statistics-body
  .function
  .fn
  div
  .fn-description
  .toggle-btn.bc-toggle-cyn
  > .inner-circle {
  margin-left: 12px;
}
.statistics
  .statistics-body
  .function
  .fn
  div
  .fn-description
  .toggle-btn.bc-toggle-red
  > .inner-circle {
  background-color: #f96776;
}
.statistics
  .statistics-body
  .function
  .fn
  div
  .fn-description
  .toggle-btn.bc-toggle-cyn
  > .inner-circle {
  background-color: #89e0f0;
}
.statistics
  .statistics-body
  .function
  .fn
  div
  .fn-description
  .toggle-btn.bc-toggle-orange
  > .inner-circle {
  background-color: #ffaf28;
}

.statistics .statistics-body .cleaning {
}
.statistics .statistics-body .cleaning .cleaning-statistic {
  background-color: #fff;
  height: auto;
  -webkit-box-shadow: -5px 4px 10px -10px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: -5px 4px 10px -10px rgba(0, 0, 0, 0.75);
  box-shadow: -5px 4px 10px -10px rgba(0, 0, 0, 0.75);
  border-radius: 14px;
  height: 300px;
  width: 95%;
  box-sizing: border-box;
  padding: 1rem 2rem;
}
.statistics .statistics-body .cleaning .cleaning-statistic .cleaning-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.statistics
  .statistics-body
  .cleaning
  .cleaning-statistic
  .cleaning-header
  .cleaning-header-title
  p {
  font-size: 12px;
}
.statistics
  .statistics-body
  .cleaning
  .cleaning-statistic
  .cleaning-header
  .cleaning-header-title
  span {
  font-size: 15px;
  color: #9C15A1;
}
.statistics
  .statistics-body
  .cleaning
  .cleaning-statistic
  .cleaning-header
  .cleaning-header-button {
  display: flex;
  justify-content: space-between;
  width: 17%;
  border: 1px solid #ccc;
  padding: 0.25rem;
  box-sizing: border-box;
  border-radius: 5px;
}
.statistics
  .statistics-body
  .cleaning
  .cleaning-statistic
  .cleaning-header
  .cleaning-header-button
  a {
  padding: 0.15rem 0.25rem;
  box-sizing: border-box;
  border-radius: 3px;
}
.statistics .statistics-body .cleaning .cleaning-statistic .cleaning-body {
  font-size: 12px;
  font-weight: 600;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: space-between;
}
.statistics .statistics-body .cleaning .cleaning-statistic #chartVertical {
  height: 180px;
  width: 350px;
  background-color: transparent;
  border-bottom: 1px solid white;
  margin-top: 10px;
}
.statistics
  .statistics-body
  .cleaning
  .cleaning-statistic
  #chartVertical
  .charts-container {
  position: relative;
}
.statistics
  .statistics-body
  .cleaning
  .cleaning-statistic
  #chartVertical
  .bar-chart--track {
  height: 170px;
}
.statistics
  .statistics-body
  .cleaning
  .cleaning-statistic
  #chartVertical
  .bar-chart--track
  p {
  position: absolute;
  bottom: -32px;
  text-align: center;
  left: -5px;
  color: #c1c1d3;
  font-weight: 300;
}
.statistics
  .statistics-body
  .cleaning
  .cleaning-statistic
  #chartVertical
  .charts-container
  .bar-chart-vertical {
  position: relative;
  display: flex;
  justify-content: space-around;
}
.statistics
  .statistics-body
  .cleaning
  .cleaning-statistic
  #chartVertical
  .charts-container
  .bar-chart-vertical
  .bar-chart--progress {
  display: inline-block;
  position: absolute;
  bottom: 0;
  width: 7px;
  background-color: #87dff0;
  -moz-animation: progressScale-vertical 1600ms 1 forwards;
  -webkit-animation: progressScale-vertical 1600ms 1 forwards;
  animation: progressScale-vertical 1600ms 1 forwards;
}
.statistics
  .statistics-body
  .cleaning
  .cleaning-statistic
  #chartVertical
  .charts-container
  .bar-chart-vertical
  .bar-chart--track {
  background-color: #efeefa;
  width: 7px;
  position: relative;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

/* Large Screens */
@media only screen and (max-width: 1200px) {
  main {
    flex-direction: column-reverse;
  }
  .navbarr {
    height: 100%;
overflow-y:scroll;
  }
}
@media only screen and (min-width: 600px) {
  .navbarr {
    top: 0;
    width: 5rem;
    height: 100vh;
  }
  .navbarr-nav {
    position: relative;
  }
  .navbarr-nav .goo {
    width: 75px;
    height: 60px;
    background-color: #fff;
    display: inline-block;
    position: absolute;
    top: 0;
    left: 5px;
    z-index: -1;
    border-radius: 100px 0 0 100px;
    margin: 10px 0;
    transition: 1.5s ease;
    display: none;
  }
  .navbarr-nav .goo::before {
    content: "";
    width: 30px;
    height: 20px;
    position: absolute;
    top: -20px;
    left: 45px;
    border-radius: 20px 0 0 20px;
    background: radial-gradient(
      circle at 10px 0,
      transparent 0,
      transparent 20px,
      white 20px
    );
  }
  .nav-link i {
    transition: color 0.9s;
  }
  .navbarr-nav .goo::after {
    content: "";
    width: 30px;
    height: 20px;
    position: absolute;
    bottom: -20px;
    left: 45px;
    border-radius: 20px 0 0 20px;
    background: radial-gradient(
      circle at 10px 20px,
      transparent 0,
      transparent 20px,
      white 20px
    );
  }
  .logo .nav-link:hover {
    filter: grayscale(0%) opacity(1);
    background-color: inherit;
    color: inherit;
  }
  a.active {
    color: #000;
  }
  .barnd {
    align-items: center;
    height: 5rem;
    color: var(--text-primary);
    text-decoration: none;
    transition: var(--transition-speed);
  }
  .mt-8 {
    margin-top: 8rem;
  }
  .logout {
    filter: grayscale(100%) opacity(0.7);
  }
}
/* Small Screens */
@media only screen and (max-width: 600px) {
  .navbarr {
    bottom: 0;
    top: inherit;
    width: 100vw;
    height: 5rem;
    border-radius: inherit;
    z-index: 1;
  }
  .logo {
    display: none;
  }
  .navbarr-nav {
    flex-direction: row;
    overflow: hidden;
  }
  .nav-link,
  .logout-btn {
    justify-content: center;
    height: 10rem;
  }
  .nav-link i,
  .logout-btn i {
    min-width: inherit;
    margin: 0 0.5rem;
  }
  .nav-item {
    transition: background-color 0.3s ease;
    background-color: inherit;
    border-radius: 50%;
  }
  .nav-item:hover {
    background-color: var(--text-primary);
  }
  .nav-item:hover i {
    color: var(--text-secondary);
  }

  main {
    margin: 0 auto;
    flex-basis: unset;
    padding: 0;
    height: 114vh;
    flex-direction: column;
    position: relative;
    overflow-x: hidden;
    animation: transitionIn 0.75s;
  }
  .main .update .update-body {
    flex-direction: column;
    justify-content: unset;
    height: 300px;
  }
  .main .update .update-body .system,
  .main .update .update-body .application {
    width: 100%;
    margin-bottom: 1rem;
  }
  .statistics,
  .main {
    position: absolute;
    transform: translateX(112%);
    transition: 0.2s ease-in-out;
  }
  #main {
    transform: translateX(0%);
  }
  .main {
    width: 90%;
    flex-basis: 55%;
    margin: 0 0 0 2rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }
  .page-transition {
    display: flex;
    justify-content: center;
    margin: 5px 0;
  }
  .page-transition .btn-box {
    border-bottom: 1px solid #ccc;
    padding: 0.5rem;
  }
  .page-transition .btn-box button {
    background-color: transparent;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 15px;
  }
  .page-transition .btn-box button i {
    color: #9C15A1;
  }
}
@media only screen and (max-width: 375px) {
  #main {
    transform: translateX(6%);
    margin: 0px;
    position: absolute;
    height: 80vh;
  }
  #statistics {
    position: absolute;
  }
  main {
    height: 100vh;
  }
  .main .update .update-body {
    flex-direction: column;
    justify-content: inherit;
    height: 300px;
  }
  .main .update .update-body .application,
  .main .update .update-body .system {
    width: 100%;
    margin-bottom: 1rem;
  }
  .statistics .statistics-body {
    padding-left: 0.25rem;
  }
  .statistics .statistics-body .function {
    padding: 1rem;
  }
  .statistics .statistics-header div {
    justify-content: center;
  }
  .statistics .statistics-body .function .fn {
    grid-template-columns: 1fr;
    grid-template-rows: 1fr;
    width: 80%;
    margin: 0 auto;
  }
  .statistics .statistics-body .cleaning {
    width: 80%;
    margin: 0 auto;
  }
  .statistics .statistics-body .function p,
  .statistics .statistics-body .cleaning p {
    text-align: center;
  }
  .statistics .statistics-body .cleaning .cleaning-statistic .cleaning-header {
    justify-content: space-around;
  }
  .statistics
    .statistics-body
    .cleaning
    .cleaning-statistic
    .cleaning-header
    .cleaning-header-button {
    width: 20%;
  }
  .main .weekly .weekly-body .item {
    padding: 0 !important;
    border: unset;
  }
  .main .weekly .weekly-body .item:hover .item-size {
    transform: scale(1);
  }
}
@media only screen and (max-width: 280px) {
  .main .weekly .link a {
    font-size: 10px;
  }
  .main .weekly .link a.active {
    font-size: 11px;
  }
  .main .weekly .weekly-body {
    height: 355px;
    flex-direction: column;
    margin-bottom: 30px;
  }
  .statistics {
    width: inherit;
    padding: 0;
  }
  .statistics .statistics-header {
    width: inherit;
  }
  .statistics .statistics-body .function {
    padding: 3rem;
  }
  .statistics .statistics-body .function p,
  .statistics .statistics-body .cleaning p {
    text-align: left;
  }
  .statistics .statistics-body .function .fn {
    width: 70%;
    margin: 0;
  }
  .statistics .statistics-body .cleaning .cleaning-statistic {
    width: 76%;
    padding: 1rem;
  }
  .statistics
    .statistics-body
    .cleaning
    .cleaning-statistic
    .cleaning-header
    .cleaning-header-button {
    flex-direction: column;
  }
}

@keyframes circle-chart-fill {
  to {
    stroke-dasharray: 0 100;
  }
}

@keyframes circle-chart-appear {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
@keyframes progressScale-vertical {
  0% {
    height: 0;
  }
}
@keyframes transitionIn {
  from {
    opacity: 0;
    transform: rotateX(-10deg);
  }
  to {
    opacity: 1;
    transform: rotateX(0);
  }
}
</style>  
<nav style=" margin-top:40px" class="navbarr">
  <div class="logo">
    <a href="#" class="barnd">
      <p>Tsavo<span>254</span></p>
    </a>
  </div>
  <ul class="navbarr-nav">
   <li class="nav-item">
      <a href="https://tsavo.store" class="nav-link" onmousedown="activePage(1)">
        <i class="">Tsavo</i>
      </a>
    </li>
    <li class="nav-item">
      <a href="index.php" class="nav-link" onmousedown="activePage(0)">
        <i class="fas fa-home"></i>
      </a>
    </li>
   <li class="nav-item">
      <a href="#" class="nav-link help-shortcuts-launcher" onmousedown="activePage(2)">
        <i class="far fa-keyboard"></i>
      </a>
    </li>
    <li class="nav-item">
      <a href="membership_profile.php" class="nav-link" onmousedown="activePage(3)">
        <i class="fas fa-user"></i>
      </a>
    </li>
        <li class="nav-item">
      <a href="index.php?signOut=1" class="logout-btn">
        <i class="fas fa-sign-out-alt"></i>
      </a>
    </li>
    <span class="goo"></span>
  </ul>
</nav>

<?php 
	if(!isset($Translation)) { @header('Location: index.php'); exit; } 

	$currDir = dirname(__FILE__);
	include_once("{$currDir}/header.php");
	@include("{$currDir}/hooks/links-home.php");

	if(is_file("{$currDir}/hooks/home-custom.php")) {
		include("{$currDir}/hooks/home-custom.php");
		include_once("{$currDir}/footer.php");
		exit;
	}

	/*
		Classes of first and other blocks
		---------------------------------
		For possible classes, refer to the Bootstrap grid columns, panels and buttons documentation:
			Grid columns: https://getbootstrap.com/css/#grid
			Panels: https://getbootstrap.com/components/#panels
			Buttons: https://getbootstrap.com/css/#buttons
	*/
	$block_classes = [
		'first' => [
			'grid_column' => 'col-lg-12',
			'panel' => 'panel-warning',
			'link' => 'btn-warning',
		],
		'other' => [
			'grid_column' => 'col-lg-6',
			'panel' => 'panel-info',
			'link' => 'btn-info',
		],
	];
?>

<div class="jumbotron clearfix">
<span><img style="float:right;" src="https://upload.wikimedia.org/wikipedia/commons/4/49/Flag_of_Kenya.svg" width="100vh" /></span>
<img src="resources/images/1.png" width="100vh" />
<span style=" font-family:Trebuchet MS; font-size:calc(1vw + 1vh + .5vmin); color:#268BF6">  <br/>VENDOR HUB</span>
</div>
<style>
	.panel-body-description{
		margin-top: 10px;
		height: 100px;
		overflow: auto;
	}
	.panel-body .btn img{
		margin: 0 10px;
		max-height: 32px;
	}
</style>



<?php
	// get member info
	$mi = getMemberInfo();

	// get configured name of guest user
	$admin_config = config('adminConfig');
	$guest_username = $admin_config['anonymousMember'];

	/* accessible tables */
	$arrTables = get_tables_info();
	if(is_array($arrTables) && count($arrTables)) {
		/* how many table groups do we have? */
		$groups = get_table_groups();
		$multiple_groups = (count($groups) > 1 ? true : false);

		/* construct $tg: table list grouped by table group */
		$tg = [];
		if(count($groups)) {
			foreach($groups as $grp => $tables) {
				foreach($tables as $tn) {
					$tg[$tn] = $grp;
				}
			}
		}

		$i = 0; $current_group = '';
		foreach($tg as $tn => $tgroup) {
			$tc = $arrTables[$tn];
			/* is the current table filter-first? */
			$tChkFF = array_search($tn, array());
			/* hide current table in homepage? */
			$tChkHL = array_search($tn, array());
			/* allow homepage 'add new' for current table? */
			$tChkAHAN = array_search($tn, array('products','supplier','agent'));

			/* homepageShowCount for current table? */
			$count_badge = '';
			if($tc['homepageShowCount'] && ($tChkHL === false || $tChkHL === null)) {
				$sql_from = get_sql_from($tn, false, true);
				$count_records = ($sql_from ? sqlValue("select count(1) from " . $sql_from) : 0);
				$count_badge = '<span class="badge hspacer-lg text-bold">' . number_format($count_records) . '</span>';
			}

			$t_perm = getTablePermissions($tn);
			$can_insert = $t_perm['insert'];

			$searchFirst = (($tChkFF !== false && $tChkFF !== null) ? '?Filter_x=1' : '');
			?>
				<?php if(!$i && !$multiple_groups) { /* no grouping, begin row */ ?>

					<div class="row table_links">
				<?php } ?>
				<?php if($multiple_groups && $current_group != $tgroup) { /* grouping, begin group & row */ ?>
					<?php if($current_group != '') { /* not first group, so we should first end previous group */ ?>

							</div><!-- /.table_links -->
							<div class="row custom_links">
								<?php
									/* custom home links for current group, as defined in "hooks/links-home.php" */
									echo get_home_links($homeLinks, $block_classes['other'], $current_group);
								?>
							</div>
						</div><!-- /.collapse -->
					<?php } ?>
					<?php $current_group = $tgroup; ?>

					<a class="btn btn-tsavo btn-block btn-lg collapser vspacer-lg" data-toggle="collapse" href="#group-<?php echo md5($tgroup); ?>"><?php echo $tgroup; ?> <i class="glyphicon glyphicon-chevron-right"></i></a>
					<div class="collapse" id="group-<?php echo md5($tgroup); ?>">
						<div class="row table_links">
				<?php } ?>

					<?php if($tChkHL === false || $tChkHL === null) { /* if table is not set as hidden in homepage */ ?>
						<div id="<?php echo $tn; ?>-tile" class="<?php echo (!$i ? $block_classes['first']['grid_column'] : $block_classes['other']['grid_column']); ?>">
							<div class="panel <?php echo (!$i ? $block_classes['first']['panel'] : $block_classes['other']['panel']); ?>">
								<div class="panel-body">
									<?php if($can_insert && $tChkAHAN !== false && $tChkAHAN !== null) { ?>

										<div class="btn-group" style="width: 100%;">
										   <a style="width: 85%;" class="btn btn-lg <?php echo (!$i ? $block_classes['first']['link'] : $block_classes['other']['link']); ?>" title="<?php echo preg_replace("/&amp;(#[0-9]+|[a-z]+);/i", "&$1;", html_attr(strip_tags($tc['Description']))); ?>" href="<?php echo $tn; ?>_view.php<?php echo $searchFirst; ?>"><?php echo ($tc['tableIcon'] ? '<img src="' . $tc['tableIcon'] . '">' : '');?><strong class="table-caption"><?php echo $tc['Caption']; ?></strong><?php echo $count_badge; ?></a>
										   <a id="<?php echo $tn; ?>_add_new" style="width: 15%; padding-right: 0.1rem; padding-left: 0.1rem;" class="btn btn-add-new btn-lg <?php echo (!$i ? $block_classes['first']['link'] : $block_classes['other']['link']); ?>" title="<?php echo html_attr($Translation['Add New']); ?>" href="<?php echo $tn; ?>_view.php?addNew_x=1"><i style="vertical-align: bottom;" class="glyphicon glyphicon-plus"></i></a>
										</div>
									<?php } else { ?>

										<a class="btn btn-block btn-lg <?php echo (!$i ? $block_classes['first']['link'] : $block_classes['other']['link']); ?>" title="<?php echo preg_replace("/&amp;(#[0-9]+|[a-z]+);/i", "&$1;", html_attr(strip_tags($tc['Description']))); ?>" href="<?php echo $tn; ?>_view.php<?php echo $searchFirst; ?>"><?php echo ($tc['tableIcon'] ? '<img src="' . $tc['tableIcon'] . '">' : '');?><strong class="table-caption"><?php echo $tc['Caption']; ?></strong><?php echo $count_badge; ?></a>
									<?php } ?>

									<div class="panel-body-description"><?php echo $tc['Description']; ?></div>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php if($i == (count($arrTables) - 1) && !$multiple_groups) { /* no grouping, end row */ ?>

					</div> <!-- /.table_links -->

					<div class="row custom_links" id="custom_links">
						<?php
							/* custom home links, as defined in "hooks/links-home.php" */
							echo get_home_links($homeLinks, $block_classes['other'], '*');
						?>
					</div>

				<?php } ?>
				<?php if($i == (count($arrTables) - 1) && $multiple_groups) { /* grouping, end last group & row */ ?>

							</div> <!-- /.table_links -->
							<div class="row custom_links" id="custom_links">
								<?php
									/* custom home links for last table group, as defined in "hooks/links-home.php" */
									echo get_home_links($homeLinks, $block_classes['other'], $tgroup);

									/* custom home links having no table groups, as defined in "hooks/links-home.php" */
									echo get_home_links($homeLinks, $block_classes['other']);
								?>
							</div>
						</div><!-- /.collapse -->
						
						<body>
<!-- partial:index.partial.html -->

<div class="page-transition">
  <div class="btn-box">
    <button id="btn-main" onclick="openMain()"><i class="fas fa-th-list"></i></button>
    <button id="btn-statistics" onclick="openStatistics()"><i class="fas fa-address-card"></i></button>
  </div>
</div>
<main>
  <section id="main" class="main">
    <div class="baner">
      <div class="baner-text" style="text-align:center;">
        <h1>Hello, <?php echo $mi['username']; ?>!</h1>
        <p>Welcome to your dashboard!</p>
      </div>
      
    </div>

    <hr />
    <div class="update">
      <div class="update-header">
        <p>Dashboard Monitoring</p>
      </div>
      <div class="update-body">
        <div class="system">
          <div class="update-content">
            <h3 class="c-blue-dark">Dashboard Cookies</h3>
            <p class="c-blue"><?php echo date('D/F/Y---h:i:s A'); ?></p>
          </div>
          <hr>
          <div class="update-charts">
            <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="200" height="200" xmlns="http://www.w3.org/2000/svg">
              <circle class="circle-chart__background" stroke="#efefef" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="10.91549431" />
              <circle class="circle-chart__circle circle-chart__circle--negative" stroke="#f25767" stroke-width="2" stroke-dasharray="17,1287" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="10.91549431" />
              <g class="circle-chart__info">
                <text stroke="#f25767" class="circle-chart__percent" x="16.91549431" y="16.5" alignment-baseline="central" text-anchor="middle" font-size="5">25%</text>
              </g>
            </svg>
          </div>
        </div>
        <div class="application bc-blue-dark">
          <div class="update-content">
            <h3 class="c-white">Dashboard Cache</h3>
            <p class="c-cyn"><?php echo time(); ?></p>
          </div>
          <hr>
          <div class="update-charts">
            <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="200" height="200" xmlns="http://www.w3.org/2000/svg">
              <circle class="circle-chart__background" stroke="#5c5fb2" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="10.91549431" />
              <circle class="circle-chart__circle circle-chart__circle--negative" stroke="#ffa000" stroke-width="2" stroke-dasharray="34.226" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="10.91549431" />
              <g class="circle-chart__info">
                <text class="circle-chart__percent" x="16.91549431" y="16.5" alignment-baseline="central" fill="white" text-anchor="middle" font-size="5">50%</text>
              </g>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>
  
</main>

</body>


	<!-- partial:index.partial.html -->
<!-- 

~ Created this in more than 16+ hours
- More info on GitHub ;) 

-->


  
  

</div>

		<?php } ?>
			<?php
			$i++;
		}
	} elseif($mi['username'] && $mi['username'] != $guest_username) {
		// non-guest user but no tables to access
		die(error_message($Translation['no table access'], false));
	} else {
		?><script>window.location='index.php?signIn=1';</script><?php
	}
?>

<script>
	$j(function() {
		var table_descriptions_exist = false;
		$j('div[id$="-tile"] .panel-body-description').each(function() {
			if($j.trim($j(this).html()).length) table_descriptions_exist = true;
		});

		if(!table_descriptions_exist) {
			$j('div[id$="-tile"] .panel-body-description').css({height: 'auto'});
		}

		$j('.panel-body .btn').height(32);

		$j('.btn-add-new').click(function() {
			var tn = $j(this).attr('id').replace(/_add_new$/, '');
			modal_window({
				url: tn + '_view.php?addNew_x=1&Embedded=1',
				size: 'full',
				title: $j(this).prev().children('.table-caption').text() + ": <?php echo html_attr($Translation['Add New']); ?>" 
			});
			return false;
		});

		/* adjust arrow directions on opening/closing groups, and initially open first group */
		$j('.collapser').click(function() {
			$j(this).children('.glyphicon').toggleClass('glyphicon-chevron-right glyphicon-chevron-down');
		});

		/* hide empty table groups */
		$j('.collapser').each(function() {
			var target = $j(this).attr('href');
			if(!$j(target + " .row div").length) $j(this).hide();
		});
		$j('.collapser:visible').eq(0).click();
	});
</script>
<script>
let btn_main = document.getElementById("btn-main");
let btn_statistics = document.getElementById("btn-statistics");
let main = document.getElementById("main");
let statistics = document.getElementById("statistics");
function openMain() {
  main.style.transform = "translateX(6%)";
  main.style.position = "absolute";
  main.style.margin = "0";
  main.style.height = "100vh";
  statistics.style.transform = "translateX(112%)";
  btn_main.style.backgroundColor = "#e4e4f6";
  btn_statistics.style.backgroundColor = "#fff";
}
function openStatistics() {
  statistics.style.transform = "translateX(-9%)";
  statistics.style.position = "inherit";
  statistics.style.margin = "0";
  statistics.style.height = "105vh";
  main.style.transform = "translateX(112%)";
  btn_statistics.style.backgroundColor = "#e4e4f6";
  btn_main.style.backgroundColor = "#fff";
}
const goo = document.querySelector(".goo"),
  map = {
    0: 0,
    1: 75,
    2: 160,
    3: 240,
    4: 320,
    5: 400
  },
  activePage = (index) => {
    goo.style.display = "block";
    goo.style.top = get(index);
  };
ahref = document.querySelector(".navbarr-nav").children;
for (let i = 0; i < ahref.length; i++) {
  const a = ahref[i].querySelector(".nav-link");
  if (isNaN(a)) {
    a.addEventListener("click", function () {
      for (let j = 0; j < ahref.length; j++) {
        if (isNaN(ahref[j].querySelector(".nav-link"))) {
          ahref[j].querySelector(".nav-link").classList.remove("active");
        }
      }
      this.classList.add("active");
    });
  }
}

function get(i) {
  return map[i] + "px";
}
</script>

