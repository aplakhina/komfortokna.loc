<section id="fixedContacts">
    <div id="modal-phone" class="modal fade text-center" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Связаться с нами вы можете по телефону</h3>
                </div>
                <div class="modal-body">
                    <h2 class="text-success" style="font-family: 'Comic Sans MS'; ">
                        <span style="color: #333333;" class="glyphicon glyphicon-earphone"></span> +375 (44) 7-598-598
                    </h2>
                    <br /><h3 class="color-red">Всегда рады вашим звонкам !</h3>
                </div>
            </div>

        </div>
    </div>

    <div id="modal-email" class="modal fade" role="dialog">
        <div class="modal-dialog text-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Почта e-mail</h3>
                </div>
                <div class="modal-body">
                    <h2>
                        <span class="glyphicon glyphicon-globe"></span>
                        <a href="mailto:komfortokon@gmail.com?subject=Заказ приставки">
                            komfortokon@gmail.com
                        </a>
                    </h2>
                    <br /><h3 class="color-red" ">Бесплатные консультации по почте</h3>
                </div>
            </div>

        </div>
    </div>

    <div class ="fixed-contacts">
        <div class="row" style="cursor: pointer;">
            <div class="col-md-12">
                <a data-toggle="modal" data-target="#modal-phone">
                    <img id="phone-fixed" src="<?php echo URL;?>content/images/phoneFix.png" />
                </a>
            </div>
        </div>
        <div class="row" style="cursor: pointer;">
            <div class="col-md-12">
                <a data-toggle="modal" data-target="#modal-email">
                    <img id="mail-fixed" src="<?php echo URL;?>content/images/mailFix.png" />
                </a>
            </div>
        </div>
    </div>
</section>
