<style>

/**====== Foo-table css end ======**/
/**====== Data Tables css end ======**/
/**  =====================
      Authentication css start
==========================  **/
.auth-wrapper {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  overflow: hidden;
  min-width: 100%;
  min-height: 100vh;
}
.auth-wrapper .btn-auth-gen .btn-icon {
  width: 140px;
  height: 140px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  font-size: 45px;
}
.auth-wrapper .btn-auth-gen .btn-icon small {
  font-size: 15px;
}
.auth-wrapper .input-group {
  background: transparent;
}
.auth-wrapper .card {
  margin-bottom: 0;
}
.auth-wrapper > div {
  z-index: 5;
}
.auth-wrapper .auth-content {
  position: relative;
  width: 390px;
  padding: 15px;
  z-index: 5;
}
.auth-wrapper .auth-content.multyform, .auth-wrapper .auth-content.subscribe {
  width: 750px;
}
@media only screen and (max-width: 768px) {
  .auth-wrapper {
    max-width: 360px;
  }
}
@media only screen and (max-width: 575px) {
  .auth-wrapper .card .card-body {
    padding: 30px 15px;
  }
}
.auth-wrapper .auth-icon {
  font-size: 30px;
}
.auth-wrapper .auth-icon:before {
  background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.auth-wrapper.offline {
  background-image: none;
}
.auth-wrapper.offline:before {
  display: none;
}/*
.auth-wrapper .auth-bg .r {
  position: absolute;
  width: 300px;
  height: 300px;
  border-radius: 50%;
}
.auth-wrapper .auth-bg .r:nth-child(1) {
  top: -100px;
  right: -100px;
  background: #7e57c2;
}
.auth-wrapper .auth-bg .r:nth-child(2) {
  top: -150px;
  right: 590px;
  background: #7e57c2;
}
.auth-wrapper .auth-bg .r.s:nth-child(3) {
  top: 200px;
  right: -390px;
  background: #04a9f5;
}
.auth-wrapper .auth-bg .r.s:nth-child(4) {
  left: -150px;
  bottom: 150px;
  background: #1de9b6;
}
.auth-wrapper .auth-bg .r:nth-child(5) {
  left: -100px;
  bottom: -100px;
  background: #ad107a;
}
.auth-wrapper .auth-bg .r:nth-child(6) {
  left: 750px;
  bottom: -20px;
  background: #ec407a;
}
.auth-wrapper .auth-bg .r:nth-child(7) {
  left: 400px;
  bottom: 450px;
  background: #4c407a;
}

.auth-wrapper .auth-bg .r.s {
  width: 20px;
  height: 20px;
}

.auth-wrapper .auth-bg .r:nth-child(odd) {
  -webkit-animation: floating 80s infinite;
          animation: floating 80s infinite;
}
.auth-wrapper .auth-bg .r:nth-child(even) {
  -webkit-animation: floating 80s infinite;
          animation: floating 80s infinite;
}


@-webkit-keyframes floating {
  from {
    -webkit-transform: rotate(0deg) translate(-100px) rotate(0deg);
            transform: rotate(0deg) translate(-100px) rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg) translate(-100px) rotate(-360deg);
            transform: rotate(360deg) translate(-80px) rotate(-360deg);
  }
}
@keyframes floating {
  from {
    -webkit-transform: rotate(0deg) translate(-150px) rotate(0deg);
            transform: rotate(0deg) translate(-100px) rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg) translate(-150px) rotate(-360deg);
            transform: rotate(360deg) translate(-100px) rotate(-360deg);
  }
}*/
    
.auth-wrapper .auth-bg .r {
  position: absolute;
  width: 300px;
  height: 300px;
  border-radius: 50%;
}
.auth-wrapper .auth-bg .r:first-child {
  top: -100px;
  right: -100px;
  background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
}
.auth-wrapper .auth-bg .r:last-child {
  left: -100px;
  bottom: -100px;
  background: linear-gradient(-135deg, #899FD4 0%, #A389D4 100%);
}
.auth-wrapper .auth-bg .r.s {
  width: 20px;
  height: 20px;
}
.auth-wrapper .auth-bg .r.s:nth-child(2) {
  top: 150px;
  right: -150px;
  background: #04a9f5;
}
.auth-wrapper .auth-bg .r.s:nth-child(3) {
  left: -150px;
  bottom: 150px;
  background: #1de9b6;
}
.auth-wrapper .auth-bg .r:nth-child(odd) {
  -webkit-animation: floating 7s infinite;
          animation: floating 7s infinite;
}
.auth-wrapper .auth-bg .r:nth-child(even) {
  -webkit-animation: floating 9s infinite;
          animation: floating 9s infinite;
}
kit-keyframes floating {
  from {
    -webkit-transform: rotate(0deg) translate(-10px) rotate(0deg);
            transform: rotate(0deg) translate(-10px) rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg) translate(-10px) rotate(-360deg);
            transform: rotate(360deg) translate(-10px) rotate(-360deg);
  }
}
@keyframes floating {
  from {
    -webkit-transform: rotate(0deg) translate(-10px) rotate(0deg);
            transform: rotate(0deg) translate(-10px) rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg) translate(-10px) rotate(-360deg);
            transform: rotate(360deg) translate(-10px) rotate(-360deg);
  }
}
    
</style>

<div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
       
