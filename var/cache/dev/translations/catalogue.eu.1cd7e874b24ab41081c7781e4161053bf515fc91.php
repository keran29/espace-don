<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('eu', array (
  'validators' => 
  array (
    'This value should be false.' => 'Balio hau faltsua izan beharko litzateke.',
    'This value should be true.' => 'Balio hau egia izan beharko litzateke.',
    'This value should be of type {{ type }}.' => 'Balio hau {{ type }} motakoa izan beharko litzateke.',
    'This value should be blank.' => 'Balio hau hutsik egon beharko litzateke.',
    'The value you selected is not a valid choice.' => 'Hautatu duzun balioa ez da aukera egoki bat.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Gutxienez aukera {{ limit }} hautatu behar duzu.|Gutxienez {{ limit }} aukera hautatu behar dituzu.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Gehienez aukera {{ limit }} hautatu behar duzu.|Gehienez {{ limit }} aukera hautatu behar dituzu.',
    'One or more of the given values is invalid.' => 'Emandako balioetatik gutxienez bat ez da egokia.',
    'This field was not expected.' => 'Eremu hau ez zen espero.',
    'This field is missing.' => 'Eremu hau falta da.',
    'This value is not a valid date.' => 'Balio hau ez da data egoki bat.',
    'This value is not a valid datetime.' => 'Balio hau ez da data-ordu egoki bat.',
    'This value is not a valid email address.' => 'Balio hau ez da posta elektroniko egoki bat.',
    'The file could not be found.' => 'Ezin izan da fitxategia aurkitu.',
    'The file is not readable.' => 'Fitxategia ez da irakurgarria.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fitxategia handiegia da ({{ size }} {{ suffix }}). Baimendutako tamaina handiena {{ limit }} {{ suffix }} da.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Fitxategiaren mime mota ez da egokia ({{ type }}). Hauek dira baimendutako mime motak: {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Balio hau gehienez {{ limit }} izan beharko litzateke.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Balio hau luzeegia da. Gehienez karaktere {{ limit }} eduki beharko luke.|Balio hau luzeegia da. Gehienez {{ limit }} karaktere eduki beharko lituzke.',
    'This value should be {{ limit }} or more.' => 'Balio hau gutxienez {{ limit }} izan beharko litzateke.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Balio hau motzegia da. Karaktere {{ limit }} gutxienez eduki beharko luke.|Balio hau motzegia da. Gutxienez {{ limit }} karaktere eduki beharko lituzke.',
    'This value should not be blank.' => 'Balio hau ez litzateke hutsik egon behar.',
    'This value should not be null.' => 'Balio hau ez litzateke nulua izan behar.',
    'This value should be null.' => 'Balio hau nulua izan beharko litzateke.',
    'This value is not valid.' => 'Balio hau ez da egokia.',
    'This value is not a valid time.' => 'Balio hau ez da ordu egoki bat.',
    'This value is not a valid URL.' => 'Balio hau ez da baliabideen kokatzaile uniforme (URL) egoki bat.',
    'The two values should be equal.' => 'Bi balioak berdinak izan beharko lirateke.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fitxategia handiegia da. Baimendutako tamaina handiena {{ limit }} {{ suffix }} da.',
    'The file is too large.' => 'Fitxategia handiegia da.',
    'The file could not be uploaded.' => 'Ezin izan da fitxategia igo.',
    'This value should be a valid number.' => 'Balio hau zenbaki egoki bat izan beharko litzateke.',
    'This file is not a valid image.' => 'Fitxategi hau ez da irudi egoki bat.',
    'This is not a valid IP address.' => 'Honako hau ez da IP helbide egoki bat.',
    'This value is not a valid language.' => 'Balio hau ez da hizkuntza egoki bat.',
    'This value is not a valid locale.' => 'Balio hau ez da kokapen egoki bat.',
    'This value is not a valid country.' => 'Balio hau ez da herrialde egoki bat.',
    'This value is already used.' => 'Balio hau jadanik erabilia izan da.',
    'The size of the image could not be detected.' => 'Ezin izan da irudiaren tamaina detektatu.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Irudiaren zabalera handiegia da ({{ width }}px). Onartutako gehienezko zabalera {{ max_width }}px dira.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Irudiaren zabalera txikiegia da ({{ width }}px). Onartutako gutxieneko zabalera {{ min_width }}px dira.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Irudiaren altuera handiegia da ({{ height }}px). Onartutako gehienezko altuera {{ max_height }}px dira.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Irudiaren altuera txikiegia da ({{ height }}px). Onartutako gutxieneko altuera {{ min_height }}px dira.',
    'This value should be the user\'s current password.' => 'Balio hau uneko erabiltzailearen pasahitza izan beharko litzateke.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Balio honek zehazki karaktere {{ limit }} izan beharko luke.|Balio honek zehazki {{ limit }} karaktere izan beharko lituzke.',
    'The file was only partially uploaded.' => 'Fitxategiaren zati bat bakarrik igo da.',
    'No file was uploaded.' => 'Ez da fitxategirik igo.',
    'No temporary folder was configured in php.ini.' => 'Ez da aldi baterako karpetarik konfiguratu php.ini fitxategian.',
    'Cannot write temporary file to disk.' => 'Ezin izan da aldi baterako fitxategia diskoan idatzi.',
    'A PHP extension caused the upload to fail.' => 'PHP luzapen batek igoeraren hutsa eragin du.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Bilduma honek gutxienez elementu {{ limit }} eduki beharko luke.|Bilduma honek gutxienez {{ limit }} elementu eduki beharko lituzke.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Bilduma honek gehienez elementu {{ limit }} eduki beharko luke.|Bilduma honek gehienez {{ limit }} elementu eduki beharko lituzke.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Bilduma honek zehazki elementu {{ limit }} eduki beharko luke.|Bilduma honek zehazki {{ limit }} elementu eduki beharko lituzke.',
    'Invalid card number.' => 'Txartel zenbaki baliogabea.',
    'Unsupported card type or invalid card number.' => 'Txartel mota onartezina edo txartel zenbaki baliogabea.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Hau ez da baliozko banku internazionaleko kontu zenbaki (IBAN) bat.',
    'This value is not a valid ISBN-10.' => 'Balio hau ez da onartutako ISBN-10 bat.',
    'This value is not a valid ISBN-13.' => 'Balio hau ez da onartutako ISBN-13 bat.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Balio hau ez da onartutako ISBN-10 edo ISBN-13 bat.',
    'This value is not a valid ISSN.' => 'Balio hau ez da onartutako ISSN bat.',
    'This value is not a valid currency.' => 'Balio hau ez da baliozko moneta bat.',
    'This value should be equal to {{ compared_value }}.' => 'Balio hau {{ compared_value }}-(r)en berbera izan beharko litzateke.',
    'This value should be greater than {{ compared_value }}.' => 'Balio hau {{ compared_value }} baino handiagoa izan beharko litzateke.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Balio hau {{ compared_value }}-(r)en berdina edota handiagoa izan beharko litzateke.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Balio hau {{ compared_value_type }} {{ compared_value }}-(r)en berbera izan beharko litzateke.',
    'This value should be less than {{ compared_value }}.' => 'Balio hau {{ compared_value }} baino txikiagoa izan beharko litzateke.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Balio hau {{ compared_value }}-(r)en berdina edota txikiagoa izan beharko litzateke.',
    'This value should not be equal to {{ compared_value }}.' => 'Balio hau ez litzateke {{ compared_value }}-(r)en berdina izan behar.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Balio hau ez litzateke {{ compared_value_type }} {{ compared_value }}-(r)en berbera izan behar.',
    'This form should not contain extra fields.' => 'Formulario honek ez luke aparteko eremurik eduki behar.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Igotako fitxategia handiegia da. Mesedez saiatu fitxategi txikiago bat igotzen.',
    'The CSRF token is invalid.' => 'CSRF tokena ez da egokia.',
    'fos_user.username.already_used' => 'Erabiltzaile izena hori erabiltzen da dagoeneko',
    'fos_user.username.blank' => 'Sartu erabiltzaile izena mesedez',
    'fos_user.username.short' => '[-Inf,Inf]Erabiltzaile izena motzegia da',
    'fos_user.username.long' => '[-Inf,Inf]Erabiltzaile izena luzeegia da',
    'fos_user.email.already_used' => 'E-posta helbide hori erabiltzen da dagoeneko',
    'fos_user.email.blank' => 'Sarty E-posta helbidea mesedez',
    'fos_user.email.short' => '[-Inf,Inf]E-posta helbidea motzegia da',
    'fos_user.email.long' => '[-Inf,Inf]E-posta helbidea luzeegia da',
    'fos_user.email.invalid' => 'E-posta helbidea ez da zuzena',
    'fos_user.password.blank' => 'Sartu pasahitza mesedez',
    'fos_user.password.short' => '[-Inf,Inf]Pasahitza motzegia da',
    'fos_user.password.mismatch' => 'Bi pasahitzek ez dute bat egiten',
    'fos_user.new_password.blank' => 'Sartu pasahitz berria mesedez',
    'fos_user.new_password.short' => '[-Inf,Inf]Pasahitz berria motzegia da',
    'fos_user.current_password.invalid' => 'Sartutako pasahitza ez da baliagarria',
    'fos_user.group.blank' => 'Sartu izena mesedez',
    'fos_user.group.short' => '[-Inf,Inf]Izena motzegia da',
    'fos_user.group.long' => '[-Inf,Inf]Izena luzeegia da',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Talde eguneratu',
    'group.show.name' => 'Taldearen izena',
    'group.new.submit' => 'Taldea sortu',
    'group.flash.updated' => 'Taldea eguneratua izan da',
    'group.flash.created' => 'Taldea sortua izan da',
    'group.flash.deleted' => 'Taldea ezabatua izan da',
    'security.login.username' => 'Erabiltzaile izena',
    'security.login.password' => 'Pasahitza',
    'security.login.remember_me' => 'Oroitu',
    'security.login.submit' => 'Sartu',
    'profile.show.username' => 'Erabiltzaile izena',
    'profile.show.email' => 'E-posta',
    'profile.edit.submit' => 'Erabiltzailea eguneratu',
    'profile.flash.updated' => 'Perfila eguneratua izan da',
    'change_password.submit' => 'Pasahitza aldatu',
    'change_password.flash.success' => 'Pasahitz ongi eguneratu da',
    'registration.check_email' => 'E-posta bat bidali da %email% helbidera. Kontua aktibatzeko klik egin beharreko esteka zehazten da.',
    'registration.confirmed' => 'Zorionak %username%, zure kontua aktibatua dago.',
    'registration.back' => 'Itzuli.',
    'registration.submit' => 'Izena eman',
    'registration.flash.user_created' => 'Erabiltzailea ongi sortu da',
    'registration.email.subject' => 'Ongi etorri %username%!',
    'registration.email.message' => 'Kaixo %username%!

Kontuaren balidazioazioarekin jarraitzeko - ireki ondoko orria: %confirmationUrl%

Adeitasunez,
Taldea.
',
    'resetting.password_already_requested' => '24 orduen barruan erabiltzaile honen pasahitza eskatua izan da.',
    'resetting.check_email' => 'Email bat bidali zaio %email% helbideari. Pasahitza berreskuratzeko esteka zehazten da bertan.',
    'resetting.request.invalid_username' => '%username% erabiltzailea edo E-posta ez da existitzen.',
    'resetting.request.username' => 'Erabiltzaile izena',
    'resetting.request.submit' => 'Pasahitza berreskuratu',
    'resetting.reset.submit' => 'Pasahitza aldatu',
    'resetting.flash.success' => 'Pasahitza ongi aldatu da',
    'resetting.email.subject' => 'Pasahitza berrezarri',
    'resetting.email.message' => 'Kaixo %username%!

Pasahitza berrezartzeko egin klik esteka honetan: %confirmationUrl%

Adeitasunez,
Taldea.
',
    'layout.logout' => 'Irten',
    'layout.login' => 'Sartu',
    'layout.register' => 'Izena eman',
    'layout.logged_in_as' => '%username% bezala konektatua',
    'form.group_name' => 'Taldearen izena',
    'form.username' => 'Erabiltzaile izena',
    'form.email' => 'E-posta',
    'form.current_password' => 'Oraingo pasahitza',
    'form.password' => 'Pasahitza',
    'form.password_confirmation' => 'Errepikatu pasahitza',
    'form.new_password' => 'Pasahitz berria',
    'form.new_password_confirmation' => 'Errepikatu pasahitza',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'fos_user.username.already_used' => 'The username is already used',
    'fos_user.username.blank' => 'Please enter a username',
    'fos_user.username.short' => '[-Inf,Inf]The username is too short',
    'fos_user.username.long' => '[-Inf,Inf]The username is too long',
    'fos_user.email.already_used' => 'The email is already used',
    'fos_user.email.blank' => 'Please enter an email',
    'fos_user.email.short' => '[-Inf,Inf]The email is too short',
    'fos_user.email.long' => '[-Inf,Inf]The email is too long',
    'fos_user.email.invalid' => 'The email is not valid',
    'fos_user.password.blank' => 'Please enter a password',
    'fos_user.password.short' => '[-Inf,Inf]The password is too short',
    'fos_user.password.mismatch' => 'The entered passwords don\'t match',
    'fos_user.new_password.blank' => 'Please enter a new password',
    'fos_user.new_password.short' => '[-Inf,Inf]The new password is too short',
    'fos_user.current_password.invalid' => 'The entered password is invalid',
    'fos_user.group.blank' => 'Please enter a name',
    'fos_user.group.short' => '[-Inf,Inf]The name is too short',
    'fos_user.group.long' => '[-Inf,Inf]The name is too long',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Update group',
    'group.show.name' => 'Group name',
    'group.new.submit' => 'Create group',
    'group.flash.updated' => 'The group has been updated',
    'group.flash.created' => 'The group has been created',
    'group.flash.deleted' => 'The group has been deleted',
    'security.login.username' => 'Username',
    'security.login.password' => 'Password',
    'security.login.remember_me' => 'Remember me',
    'security.login.submit' => 'Log in',
    'profile.show.username' => 'Username',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Update',
    'profile.flash.updated' => 'The profile has been updated',
    'change_password.submit' => 'Change password',
    'change_password.flash.success' => 'The password has been changed',
    'registration.check_email' => 'An email has been sent to %email%. It contains an activation link you must click to activate your account.',
    'registration.confirmed' => 'Congrats %username%, your account is now activated.',
    'registration.back' => 'Back to the originating page.',
    'registration.submit' => 'Register',
    'registration.flash.user_created' => 'The user has been created successfully',
    'registration.email.subject' => 'Welcome %username%!',
    'registration.email.message' => 'Hello %username%!

To finish activating your account - please visit %confirmationUrl%

Regards,
the Team.
',
    'resetting.password_already_requested' => 'The password for this user has already been requested within the last 24 hours.',
    'resetting.check_email' => 'An email has been sent to %email%. It contains a link you must click to reset your password.',
    'resetting.request.invalid_username' => 'The username or email address "%username%" does not exist.',
    'resetting.request.username' => 'Username or email address',
    'resetting.request.submit' => 'Reset password',
    'resetting.reset.submit' => 'Change password',
    'resetting.flash.success' => 'The password has been reset successfully',
    'resetting.email.subject' => 'Reset Password',
    'resetting.email.message' => 'Hello %username%!

To reset your password - please visit %confirmationUrl%

Regards,
the Team.
',
    'layout.logout' => 'Log out',
    'layout.login' => 'Log in',
    'layout.register' => 'Register',
    'layout.logged_in_as' => 'Logged in as %username%',
    'form.group_name' => 'Group name',
    'form.username' => 'Username',
    'form.email' => 'Email',
    'form.current_password' => 'Current password',
    'form.password' => 'Password',
    'form.password_confirmation' => 'Repeat password',
    'form.new_password' => 'New password',
    'form.new_password_confirmation' => 'Repeat new password',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;