<script type="text/javascript" src="lib/slick.min.js"></script>

<script>
window.addEventListener('DOMContentLoaded', function () {
    let fform = document.querySelector('.form__block form');
	fform.onsubmit = async (event) => {
        event.preventDefault();
        let readData = new FormData(fform);

        let response = await fetch('send_data.php', {
            method: 'POST',
            body: readData
            //body: JSON.stringify(readData)
        });

        let result = await response.json();
        //console.log(result);
        renderResult(result);
		fform.reset();
	};

    function renderResult(result) {
        console.log(result);
        document.querySelector('.main-block__response').classList.add('main-block__response--show');
        document.querySelector('.main-block__response_box .response-close').addEventListener('click', ()=>{
            document.querySelector('.main-block__response').classList.remove('main-block__response--show');
        });
        let p1 = document.createElement('p');
        p1.innerHTML = result.mail;
        document.querySelector('.response-mail').append(p1);
        let p2 = document.createElement('p');
        p2.innerHTML = result.link;
        document.querySelector('.response-link').append(p2);
        let p3 = document.createElement('p');
        p3.innerHTML = result.write;
        document.querySelector('.response-write').append(p3);
        let p4 = document.createElement('p');
        p4.innerHTML = result.error;
        document.querySelector('.response-error').append(p4);
        let p5 = document.createElement('p');
        p5.innerHTML = result.last_id;
        document.querySelector('.response-last').append(p5);

    }

    $('.slick-container').slick({
		arrows: false,
		dots: true,
		fade: true,
		vertical: false,
		adaptiveHeight: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: true,
		draggable: true,
		swipe: false,
		centerMode: false,
		waitForAnimate: false,
	});

});
</script>

		</main>

		<footer class="footer-container">
            <div class="footer-container__wrapper">
                <div class="footer__left-column">
                    <h3 class="footer__left-column_header">Контакты</h3>
                    <p class="footer__left-column_line">Санкт-Петербург</p>
                    <p class="footer__left-column_line">Новорощинская ул., д.4, оф. 1415-1</p>
                    <p class="footer__left-column_line">БЦ "Собрание"</p>
                    <p class="footer__left-column_line">ст. метро Электросила</p>
                    <p class="footer__left-column_line">+7 (812) 603-48-25</p>
                </div>
                <div class="footer__right-column">
                    <h3 class="footer__right-column_header">О нас</h3>
                    <p class="footer__right-column_text">Сотрудничать с А25 – наглядно, функционально, прозрачно. Бюджет проекта на продвижение и развитие сайта базируется на количестве трудочасов на каждую задачу. Политика ценообразования А25 позволяет формировать гибкий и открытый план работ, который согласуется с клиентом. Проект легко оптимизируется и делится на понятные этапы работ.</p>
                </div>
            </duv>
		</footer>

	</body>
</html>