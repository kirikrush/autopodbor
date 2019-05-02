<?php 
	$action = $_REQUEST['action'];
	// print_r($action);
	if (empty($action)) {
		exit();
	}

	$send_email = 'fast-podbor@yandex.ru';
	$reply_email = 'fast-podbor@yandex.ru';

	// обработчик формы с двумя полями

	if ($action == 'order-form' && isset($_POST['your_name']) && isset($_POST['your_phone']) && isset($_POST['title_form'])) {
		$your_name = trim($_POST['your_name'], " ");
		$your_phone = trim($_POST['your_phone'], " ");
		$title_form = $_POST['title_form'];

	    /* Шаблон отправки сообщения с форм обратной связи сайта*/

		$admEmail = $send_email; //Адрес получателя сообщений
		$admSubject = $title_form; //Тема сообщения

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$headers .= 'From: '.$your_name.' <'.$reply_email.'>' . "\r\n";
		$headers .= 'Content-Transfer-Encoding: 8bit' . "\r\n";
		$headers .= 'X-Mailer: PHP/' . phpversion();

		//Формирование сообщения
		$admMessage = '
		    <h3><b>Данные заявки</b></h3>
		    <p>Имя: <strong>'.$your_name.'</strong></p>
		    <p>Телефон: <strong>'.$your_phone.'</strong></p>
		    <br>
		    <p><small>Заявка отправлена формой <b>'.$title_form.'</b></small></p>         
		                ';
		mail($admEmail, $admSubject, $admMessage, $headers);
	}
	// обработчик формы с тремя(диагностика) полями

	if ($action == 'diagnostik-form' && isset($_POST['your_name']) && isset($_POST['your_phone']) && isset($_POST['link_field']) && isset($_POST['title_form'])) {
		$your_name = trim($_POST['your_name'], " ");
		$your_phone = trim($_POST['your_phone'], " ");
		$link_field = trim($_POST['link_field'], " ");
		$title_form = $_POST['title_form'];

	    /* Шаблон отправки сообщения с форм обратной связи сайта*/

		$admEmail = $send_email; //Адрес получателя сообщений
		$admSubject = $title_form; //Тема сообщения

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$headers .= 'From: '.$your_name.' <'.$reply_email.'>' . "\r\n";
		$headers .= 'Content-Transfer-Encoding: 8bit' . "\r\n";
		$headers .= 'X-Mailer: PHP/' . phpversion();

		//Формирование сообщения
		$admMessage = '
		    <h3><b>Данные заявки</b></h3>
		    <p>Имя: <strong>'.$your_name.'</strong></p>
		    <p>Телефон: <strong>'.$your_phone.'</strong></p>
		    <p>Ссылка на объявление: <strong>'.$link_field.'</strong></p>
		    <br>
		    <p><small>Заявка отправлена формой <b>'.$title_form.'</b></small></p>          
		                ';
		mail($admEmail, $admSubject, $admMessage, $headers);
	}




	// обработчик формы выкуп авто

	if ($action == 'autovikup-form' && isset($_POST['your_name']) && isset($_POST['your_phone']) && isset($_POST['which_account']) && isset($_POST['your_price']) && isset($_POST['mark_car']) && isset($_POST['model_car']) && isset($_POST['year_car']) && isset($_POST['kpp_car']) && isset($_POST['engine_car']) && isset($_POST['car_drive']) && isset($_POST['condition_car']) && isset($_POST['pts_car']) && isset($_POST['vin_car']) && isset($_POST['title_form'])) {
		$your_name = trim($_POST['your_name'], " ");
		$your_phone = trim($_POST['your_phone'], " ");
		$which_account = trim($_POST['which_account'], " ");
		$your_price = trim($_POST['your_price'], " ");
		$mark_car = trim($_POST['mark_car'], " ");
		$model_car = trim($_POST['model_car'], " ");
		$year_car = trim($_POST['year_car'], " ");
		$kpp_car = trim($_POST['kpp_car'], " ");
		$engine_car = trim($_POST['engine_car'], " ");
		$car_drive = trim($_POST['car_drive'], " ");
		$condition_car = trim($_POST['condition_car'], " ");
		$pts_car = trim($_POST['pts_car'], " ");
		$vin_car = trim($_POST['vin_car'], " ");
		$title_form = $_POST['title_form'];

	    /* Шаблон отправки сообщения с форм обратной связи сайта*/

		$admEmail = $send_email; //Адрес получателя сообщений
		$admSubject = $title_form; //Тема сообщения

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$headers .= 'From: '.$your_name.' <'.$reply_email.'>' . "\r\n";
		$headers .= 'Content-Transfer-Encoding: 8bit' . "\r\n";
		$headers .= 'X-Mailer: PHP/' . phpversion();

		//Формирование сообщения
		$admMessage = '
		    <h3><b>Данные автомобиля</b></h3>		    
		    <p>Марка авто: <strong>'.$mark_car.'</strong></p>
		    <p>Модель авто: <strong>'.$model_car.'</strong></p>
		    <p>Год выпуска: <strong>'.$year_car.'</strong></p>
		    <p>КПП: <strong>'.$kpp_car.'</strong></p>
		    <p>Двигатель: <strong>'.$engine_car.'</strong></p>
		    <p>Привод: <strong>'.$car_drive.'</strong></p>
		    <p>Состояние: <strong>'.$condition_car.'</strong></p>
		    <p>ПТС: <strong>'.$pts_car.'</strong></p>
		    <p>Vin: <strong>'.$vin_car.'</strong></p>
		    <br>
		    <h3><b>Данные владельца</b></h3>	
		    <p>Какой по счету: <strong>'.$which_account.'</strong></p>
		    <p>Имя: <strong>'.$your_name.'</strong></p>
		    <p>Телефон: <strong>'.$your_phone.'</strong></p>
		    <p>Ваша цена: <strong>'.$your_price.'</strong></p>
		    <br>
		    <p><small>Заявка отправлена формой <b>'.$title_form.'</b></small></p>          
		                ';
		mail($admEmail, $admSubject, $admMessage, $headers);
	}


	// обработчик формы напишите нам на почту

	if ($action == 'mail-form' && isset($_POST['your_name']) && isset($_POST['your_email']) && isset($_POST['your_mes']) && isset($_POST['title_form'])) {
		$your_name = trim($_POST['your_name'], " ");
		$your_email = trim($_POST['your_email'], " ");
		$your_mes = trim($_POST['your_mes'], " ");
		$title_form = $_POST['title_form'];

	    /* Шаблон отправки сообщения с форм обратной связи сайта*/

		$admEmail = $send_email; //Адрес получателя сообщений
		$admSubject = $title_form; //Тема сообщения

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$headers .= 'From: '.$your_name.' <'.$reply_email.'>' . "\r\n";
		$headers .= 'Content-Transfer-Encoding: 8bit' . "\r\n";
		$headers .= 'X-Mailer: PHP/' . phpversion();

		//Формирование сообщения
		$admMessage = '
		    <h3><b>Данные заявки</b></h3>
		    <p>Имя: <strong>'.$your_name.'</strong></p>
		    <p>Электронная почта: <strong>'.$your_email.'</strong></p>
		    <p>Текст сообщения: <strong>'.$your_mes.'</strong></p>
		    <br>
		    <p><small>Заявка отправлена формой <b>'.$title_form.'</b></small></p>          
		                ';
		mail($admEmail, $admSubject, $admMessage, $headers);
	}


	// обработчик формы автоподбор


	if ($action == 'autopodbor-form' && isset($_POST['your_name']) && isset($_POST['your_phone']) && isset($_POST['mark_car']) && isset($_POST['year_car']) && isset($_POST['car_price']) && isset($_POST['car_type']) && isset($_POST['kpp_car']) && isset($_POST['engine_amount']) && isset($_POST['engine_car']) && isset($_POST['car_drive']) && isset($_POST['car_color']) && isset($_POST['car_salon']) && isset($_POST['car_complectation']) && isset($_POST['car_mileage']) && isset($_POST['selection_period']) && isset($_POST['title_form'])) {
		$your_name = trim($_POST['your_name'], " ");
		$your_phone = trim($_POST['your_phone'], " ");
		$mark_car = trim($_POST['mark_car'], " ");
		$mark_car_alternative = trim($_POST['mark_car_alternative'], " ");
		$year_car = trim($_POST['year_car'], " ");
		$year_car_alternative = trim($_POST['year_car_alternative'], " ");
		$car_price = trim($_POST['car_price'], " ");
		$car_price_alternative = trim($_POST['car_price_alternative'], " ");
		$car_type = trim($_POST['car_type'], " ");
		$car_type_alternative = trim($_POST['car_type_alternative'], " ");
		$kpp_car = trim($_POST['kpp_car'], " ");
		$kpp_car_alternative = trim($_POST['kpp_car_alternative'], " ");
		$engine_amount = trim($_POST['engine_amount'], " ");
		$engine_amount_alternative = trim($_POST['engine_amount_alternative'], " ");
		$engine_car = trim($_POST['engine_car'], " ");
		$engine_car_alternative = trim($_POST['engine_car_alternative'], " ");
		$car_drive = trim($_POST['car_drive'], " ");
		$car_drive_alternative = trim($_POST['car_drive_alternative'], " ");
		$car_color = trim($_POST['car_color'], " ");
		$car_color_alternative = trim($_POST['car_color_alternative'], " ");
		$car_salon = trim($_POST['car_salon'], " ");
		$car_salon_alternative = trim($_POST['car_salon_alternative'], " ");
		$car_mileage = trim($_POST['car_mileage'], " ");
		$car_mileage_alternative = trim($_POST['car_mileage_alternative'], " ");
		$car_complectation = trim($_POST['car_complectation'], " ");
		$car_complectation_alternative = trim($_POST['car_complectation_alternative'], " ");
		$selection_period = trim($_POST['selection_period'], " ");
		$selection_period_alternative = trim($_POST['selection_period_alternative'], " ");

		$title_form = $_POST['title_form'];

	    /* Шаблон отправки сообщения с форм обратной связи сайта*/

		$admEmail = $send_email; //Адрес получателя сообщений
		$admSubject = $title_form; //Тема сообщения

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$headers .= 'From: '.$your_name.' <'.$reply_email.'>' . "\r\n";
		$headers .= 'Content-Transfer-Encoding: 8bit' . "\r\n";
		$headers .= 'X-Mailer: PHP/' . phpversion();

		//Формирование сообщения
		$admMessage = '
		    <h3><b>Данные заявки</b></h3>
		    <p>Имя: <strong>'.$your_name.'</strong></p>
		    <p>Телефон: <strong>'.$your_phone.'</strong></p>

		    <table>
				<tr style="background:#ccc;border:1px solid #ccc;">
					<td><strong>Наименование</strong></td>
					<td><strong>Желаемое значение</strong></td>
					<td><strong>Альтернативное значение</strong></td>
				</tr>
				<tr style="background:#f5f5f5;">
					<td>Марка, модель:</td>
					<td>'.$mark_car.'</td>
					<td>'.$mark_car_alternative.'</td>
				</tr>
				<tr style="background:#f5f5f5;">
					<td>Год выпуска:</td>
					<td>'.$year_car.'</td>
					<td>'.$year_car_alternative.'</td>
				</tr>
				<tr style="background:#f5f5f5;">
					<td>Стоимость:</td>
					<td>'.$car_price.'</td>
					<td>'.$car_price_alternative.'</td>
				</tr>
				<tr style="background:#f5f5f5;">
					<td>Тип кузова:</td>
					<td>'.$car_type.'</td>
					<td>'.$car_type_alternative.'</td>
				</tr>
				<tr style="background:#f5f5f5;">
					<td>Тип КПП:</td>
					<td>'.$kpp_car.'</td>
					<td>'.$kpp_car_alternative.'</td>
				</tr>
				<tr style="background:#f5f5f5;">
					<td>Объем двигателя:</td>
					<td>'.$engine_amount.'</td>
					<td>'.$engine_amount_alternative.'</td>
				</tr>
				<tr style="background:#f5f5f5;">
					<td>Тип двигателя:</td>
					<td>'.$engine_car.'</td>
					<td>'.$engine_car_alternative.'</td>
				</tr>
				<tr style="background:#f5f5f5;">
					<td>Привод:</td>
					<td>'.$car_drive.'</td>
					<td>'.$car_drive_alternative.'</td>
				</tr>
				<tr style="background:#f5f5f5;">
					<td>Цвет:</td>
					<td>'.$car_color.'</td>
					<td>'.$car_color_alternative.'</td>
				</tr>
				<tr style="background:#f5f5f5;">
					<td>Салон:</td>
					<td>'.$car_salon.'</td>
					<td>'.$car_salon_alternative.'</td>
				</tr>
				<tr style="background:#f5f5f5;">
					<td>Пробег:</td>
					<td>'.$car_mileage.'</td>
					<td>'.$car_mileage_alternative.'</td>
				</tr>
				<tr style="background:#f5f5f5;">
					<td>Комплектация:</td>					
					<td>'.$car_complectation.'</td>
					<td>'.$car_complectation_alternative.'</td>
				</tr>
				<tr style="background:#f5f5f5;">
					<td>Желательный срок подбора:</td>
					<td>'.$selection_period.'</td>
					<td>'.$selection_period_alternative.'</td>
				</tr>
			</table>

		    <br>
		    <p><small>Заявка отправлена формой <b>'.$title_form.'</b></small></p>          
		                ';
		mail($admEmail, $admSubject, $admMessage, $headers);
	}



	// обработчик формы консультация

	if ($action == 'consult-form' && isset($_POST['your_name']) && isset($_POST['your_phone']) && isset($_POST['title_form'])) {
		$your_name = trim($_POST['your_name'], " ");
		$your_phone = trim($_POST['your_phone'], " ");
		$title_form = $_POST['title_form'];

	    /* Шаблон отправки сообщения с форм обратной связи сайта*/

		$admEmail = $send_email; //Адрес получателя сообщений
		$admSubject = $title_form; //Тема сообщения

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$headers .= 'From: '.$your_name.' <'.$reply_email.'>' . "\r\n";
		$headers .= 'Content-Transfer-Encoding: 8bit' . "\r\n";
		$headers .= 'X-Mailer: PHP/' . phpversion();

		//Формирование сообщения
		$admMessage = '
		    <h3><b>Данные заявки</b></h3>
		    <p>Имя: <strong>'.$your_name.'</strong></p>
		    <p>Телефон: <strong>'.$your_phone.'</strong></p>
		    <br>
		    <p><small>Заявка отправлена формой <b>'.$title_form.'</b></small></p>         
		                ';
		mail($admEmail, $admSubject, $admMessage, $headers);
	}




?>
