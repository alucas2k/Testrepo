<?php include('header.php'); ?>

    <section id="content">
        <div class="container_24">
            <div class="wrapper">
                <article class="grid_8 prefix_1">
                        <h6>¿Donde estamos?</h6>
                        <iframe id="map_canvas" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                        <dl>
                            <dt>8901 Marmora Road,<br>Glasgow, D04 89GR.</dt>
                            <dd><span>Freephone:</span>+1 800 559 6580</dd>
                            <dd><span>Telephone:</span>+1 800 603 6035</dd>
                            <dd><span>FAX:</span>+1 800 889 9898</dd>
                            <dd><a href="more.html">info@zenspace.es</a>E-mail:</dd>
                        </dl>
                </article>
                <article class="grid_13 prefix_1">
                    <h6>Formulario de contacto</h6>
                    <form id="contact-form">
                        <div class="success"> ¡Hemos recbido tu información! Te contactaremos lo antes posible.</div>
                        <fieldset>
                            <label class="name">
                                <input type="text" value="Name">
                                <span class="error">*No es un nombre válido.</span>
                                <span class="empty">*Este campo es obligatorio.</span>
                            </label>
                            <label class="email">
                                <input type="text" value="E-mail">
                                <span class="error">*Este email no es válido.</span>
                                <span class="empty">*Este campo es obligatorio.</span>
                            </label>
                            <label class="phone">
                                <input type="text" value="Phone">
                                <span class="error">*Este teléfono no es válido.</span>
                                <span class="empty">*Este campo es obligatorio.</span>
                            </label>
                            <label class="message">
                                <textarea>Message</textarea>
                                <span class="error">*El mensaje es demasiado breve.</span>
                                <span class="empty">*Este campo es obligatorio.</span>
                            </label>
                            <div class="btns"><a class="button" data-type="reset">Borrar</a><a class="button" data-type="submit">Enviar mensaje</a></div>
                        </fieldset>
                    </form>
                </article>
            </div>
        </div>
    </section>
</div>

<?php include('footer.php'); ?>