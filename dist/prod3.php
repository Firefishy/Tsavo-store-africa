<head>
  <style>
/*
 * modernaweb.net
 * * * * * * * * * */

@import url('https://fonts.googleapis.com/css?family=Rubik:400,700');


/* Preloader
************************** */

/* produkts
************************** */
.grid-x-wrapper {max-width: 85%; margin: 0 auto; background-image:url('prod2.jpg');}
.produkt-item .produkt-item-content { display: block; position: relative; transition: all .3s cubic-bezier(.785,.135,.15,.86); }
.produkt-item {display: block;text-align: center;color: #000;padding: 2rem;overflow: hidden;margin-bottom: 1rem;font-family: 'Rubik', sans-serif;margin: 20px 0;background: #fff;box-shadow: 0 10px 40px -3px rgba(0,0,0,0.1);border-radius: 7px;transform:scale(0.97,0.97);transition: all .17s cubic-bezier(0.24, 0.71, 0.58, 0.57);}
.produkt-item:hover {box-shadow: 0 0px 50px -10px rgba(0,0,0,0.3); transform:scale(1,1);}
.produkt-item:hover .produkt-item-image { transition-delay: .2s; -ms-transform: scale(.8) translateY(-15%); transform: scale(.8) translateY(-15%);}
.produkt-item .produkt-item-image { display: block; position: relative; margin-bottom: 2rem; transform: translate3d(0,0,0); transition: all .5s cubic-bezier(.68,-.55,.265,1.55); }
.produkt-item .produkt-item-image img { border-radius: 100%; position: relative; z-index: 3; }
.produkt-item:hover .produkt-item-image-hover { transition-delay: .1s; -ms-transform: translate(-50%,-42%) scale(.85); transform: translate(-50%,-42%) scale(.85); }
.produkt-item .produkt-item-image-hover { position: relative; z-index: 2; width: 100%; height: 100%; background: #E299E7; background: -moz-linear-gradient(135deg,  #D69AE7 0%,#7EFFE6    100%); background: -webkit-linear-gradient(135deg,  #D69AE7 0%,#7EFFE6    100%); background: linear-gradient(135deg,  #D69AE7 0%,#7EFFE6    100%); border-radius: 100%; -ms-transform: translate(-50%,-120%) scale(0); transform: translate(-50%,-120%) scale(0); position: absolute; top: 50%; left: 50%; transition: all .6s cubic-bezier(.68,-.55,.265,1.55); opacity: 0; visibility: hidden;}
.produkt-item:hover .produkt-item-image-hover { opacity: 1; visibility: visible;}
.produkt-item:hover .produkt-item-category { transition-delay: .3s; }
.produkt-item:hover .produkt-item-category,
.produkt-item:hover .produkt-item-price,
.produkt-item:hover .produkt-item-title { -ms-transform: translateY(-50px); transform: translateY(-50px); }
.produkt-item .produkt-item-category,
.produkt-item .produkt-item-price,
.produkt-item .produkt-item-title { transition: all .3s cubic-bezier(.785,.135,.15,.86); }
.produkt-item .produkt-item-category { font-size: .875rem; }
.produkt-item:hover .produkt-item-title { transition-delay: .4s; }
.produkt-item:hover .produkt-item-category,
.produkt-item:hover .produkt-item-price,
.produkt-item:hover .produkt-item-title { -ms-transform: translateY(-50px); transform: translateY(-50px); }
.produkt-item .produkt-item-category,
.produkt-item .produkt-item-price,
.produkt-item .produkt-item-title { transition: all .3s cubic-bezier(.785,.135,.15,.86); }
.produkt-item .produkt-item-title { font-size: 1.125rem; font-weight: 600; }
.produkt-item:hover .produkt-item-price { transition-delay: .5s; }
.produkt-item:hover .produkt-item-category,
.produkt-item:hover .produkt-item-price,
.produkt-item:hover .produkt-item-title { -ms-transform: translateY(-50px); transform: translateY(-50px); }
.produkt-item .produkt-item-category,
.produkt-item .produkt-item-price,
.produkt-item .produkt-item-title { transition: all .3s cubic-bezier(.785,.135,.15,.86); }
.produkt-item .produkt-item-price { font-size: 1.0625rem; }
.produkt-item:hover .button-pill { transition-delay: .6s;}
.produkt-item:hover .button-pill {opacity: 1;-ms-transform: translateY(5px) translateX(-50%);transform: translateY(5px) translateX(-50%);}
.produkt-item .button-pill { position: absolute; bottom: 0; left: 50%; -ms-transform: translateY(30px) translateX(-50%); transform: translateY(30px) translateX(-50%); opacity: 0; transition: all .3s cubic-bezier(.785,.135,.15,.86); }
.button-pill span {display: inline-block;position: relative;font-size: .75rem;font-weight: 600;letter-spacing: .09em;text-transform: uppercase;  background: #D099E7; background: -moz-linear-gradient(135deg,  #D69AE7 0%,#7EFFE6    100%); background: -webkit-linear-gradient(135deg,  #D69AE7 0%,#7EFFE6    100%); background: linear-gradient(135deg,  #D69AE7 0%,#7EFFE6   100%); color: #000;border-radius: 1.5rem;padding-top: .6rem;padding-bottom: .6rem;padding-left: 2.1rem;padding-right: 2.1rem;box-shadow: 0 14px 25px 0px rgba(75,204,140,0.1); transition: all .37s ease;}
.button-pill:hover span {display: inline-block;position: relative;font-size: .75rem;font-weight: 600;letter-spacing: .09em;text-transform: uppercase;  background: #5F335F; background: -moz-linear-gradient(135deg,  #5F335F 0%,#000    100%); background: -webkit-linear-gradient(135deg,  #5F335F 0%,#000    100%); background: linear-gradient(135deg,  #5F335F 0%,#000    100%); color: #fff;border-radius: 1.5rem;padding-top: .6rem;padding-bottom: .6rem;padding-left: 2.1rem;padding-right: 2.1rem; box-shadow: 0 14px 25px 0px rgba(0,0,0,0.1);}
@media(min-width:1200px) and (max-width:1366px) {
    .button-pill {width: 100%;}
    .produkt-box {
    padding: 0 10px;
    }
}
@media(min-width:1024px) and (max-width:1200px) {
    .produkt-item .produkt-item-title {font-size: 0.888rem;}
    .produkt-item .produkt-item-price {font-size: 0.788rem; padding: 7px 0 0;}
    .produkt-box {padding: 0 7px;}
}
</style>   
</head>
<!-- Preloader -->

    <div class="grid-container">
        <div class="grid-x grid-margin-x small-up-1 medium-up-2 large-up-4 grid-x-wrapper">
            <div class="produkt-box column">
                <a style="background-image:url('prod3.jpg'); background-size:100%" href="#" class="produkt-item">
                    <div class="produkt-item-image">
                        <img src="https://modernaweb.net/__data/img/products/apple-watch.png" alt="Stadium Full Exterior">
                        <div class="produkt-item-image-hover">
                        </div>
                    </div>
                    <div class="produkt-item-content">
                        <div class="produkt-item-category">
                            Base Item
                        </div>
                        <div class="produkt-item-title">
                            Name of produkt 1
                        </div>
                        <div class="produkt-item-price">
                            $57.00
                        </div>
                        <div class="button-pill">
                            <span>Shop Now</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="produkt-box column">
                <a style="background-image:url('prod3.jpg'); background-size:100%" href="#" class="produkt-item">
                    <div class="produkt-item-image">
                        <img src="https://modernaweb.net/__data/img/products/apple-watch.png" alt="Stadium Full Exterior">
                        <div class="produkt-item-image-hover">
                        </div>
                    </div>
                    <div class="produkt-item-content">
                        <div class="produkt-item-category">
                            Base Item
                        </div>
                        <div class="produkt-item-title">
                            Name of produkt 2
                        </div>
                        <div class="produkt-item-price">
                            $89.00
                        </div>
                        <div class="button-pill">
                            <span>Shop Now</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="produkt-box column">
                <a style="background-image:url('prod3.jpg'); background-size:100%" href="#" class="produkt-item">
                    <div class="produkt-item-image">
                        <img src="https://modernaweb.net/__data/img/products/apple-watch.png" alt="Stadium Full Exterior">
                        <div class="produkt-item-image-hover">
                        </div>
                    </div>
                    <div class="produkt-item-content">
                        <div class="produkt-item-category">
                            Base Item
                        </div>
                        <div class="produkt-item-title">
                            Name of produkt 3
                        </div>
                        <div class="produkt-item-price">
                            $89.00
                        </div>
                        <div class="button-pill">
                            <span>Shop Now</span>
                        </div>
                    </div>
                </a>
            </div>
            <div   class="produkt-box column">
                <a style="background-image:url('prod3.jpg'); background-size:100%" href="#" class="produkt-item">
                    <div class="produkt-item-image">
                        <img src="https://modernaweb.net/__data/img/products/apple-watch.png" alt="Stadium Full Exterior">
                        <div class="produkt-item-image-hover">
                        </div>
                    </div>
                    <div class="produkt-item-content">
                        <div class="produkt-item-category">
                            Base Item
                        </div>
                        <div class="produkt-item-title">
                            Name of produkt 4
                        </div>
                        <div class="produkt-item-price">
                            $89.00
                        </div>
                        <div class="button-pill">
                            <span>Shop Now</span>
                        </div>
                    </div>
                </a>
            </div>
			
        </div>
    </div>
