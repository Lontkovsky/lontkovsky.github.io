<?
        $to = 'lontkovsky@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Сообщениеc сайта'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Email: '.$_POST['email'].'</p>                        
                        <p>Телефон: '.$_POST['phone'].'</p>                        
                        <p>Вопрос: '.$_POST['subject'].'</p>                        
                        <p>Сообщение: '.$_POST['message'].'</p>                        
                        
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель \r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
		
		/* Redirect browser */
header("Location: thanks.html");
/* Make sure that code below does not get executed when we redirect. */
exit;

?>