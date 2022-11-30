@extends('layouts.app')
<head>

<style>

    .background {
        background-color:#
        
    }
.accordion {
  max-width: 400px;
  box-shadow: 0 0 10px #DBCFB8;
  border-radius: 5px;
  overflow: hidden;
  font-family: "Quicksand", sans-serif;
  background: #DBCFB8;
  margin-left: 20%;
    margin-bottom: 20%;
    margin-top: 20%;
}

.accordion__label,
.accordion__content {
  padding: 14px 20px;
}

.accordion__label {
  display: block;
  color: white;
  font-weight: 500;
  cursor: pointer;
  position: relative;
  transition: background 0.1s;
}

.accordion__label:hover {
  background: rgba(0, 0, 0, 0.1);
}

.accordion__label::after {
  content: "";
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  right: 20px;
  width: 12px;
  height: 6px;
  background-image: url('data:image/svg+xml;utf8,<svg width="100" height="50" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 100,0 50,50" style="fill:%23FFFFFF99;" /></svg>');
  background-size: contain;
  transition: transform 0.4s;
}

.accordion__content {
  background: white;
  line-height: 1.6;
  font-size: 0.85em;
  display: none;
}

.accordion__input {
  display: none;
}

.accordion__input:checked ~ .accordion__content {
  display: block;
}

.accordion__input:checked ~ .accordion__label::after {
  transform: translateY(-50%) rotate(0.5turn);
}




</style>
</head>
@section('content')
<div class="background">
<h1>Privacy Policy:</h1>
<div class="accordion">
  <div>
    <input type="radio" name="example_accordion" id="section1" class="accordion__input">
    <label for="section1" class="accordion__label">What?</label>
    <div class="accordion__content">
      <Strong><h>What personal data do we collect?</h></Strong>
      <p>The personal data we collect from you may include:</p>
      <li>Name and title</li>
      <li>Email address</li>
      <li>Mobile telephone number</li>
      <li>Date of birth</li>
      <li>Address</li>
      <li>Purchasing activity</li>
      <li>Credit/debit card information</li>
      <li>Account password and login details</li>
      <li>Shoping preferences or details to help us suggest items for you</li>
      <li>Website / browsing history, including location dataCookie information (please see our Cookie Policy for details)</li>
      <p>It may also include any information you give us:</p>
      <li>When you contact our customer services team or planning team</li>
      <li>When you engage with our social media platform</li>
      <li>When you sign up for TresorLDN Family membership and engage with TresorLDN Family membership benefits, such as recommendations based on your prior purchases at TresorLDN</li>
      <li>When you make an appointment with us </li>
    </div>
  </div>
  <div>
    <input type="radio" name="example_accordion" id="section2" class="accordion__input">
    <label for="section2" class="accordion__label">When?</label>
    <div class="accordion__content">
      <strong><h>When do we collect your personal data?</h></strong>
      <ul>
<li>When you purchase products and services from us in store, online, using the TresorLDN App or over the phone</li>
<li>When you access our website or use any of our mobile apps, our website also uses cookies; to find out more about the use of cookies and how you can manage them, please read our&nbsp;Cookie policy</li>
<li>When you log into our in-store WiFi or have your WiFi settings switched on instore</li>
<li>When you join our TresorLDN Family loyalty club</li>
<li>When you contact us or we contact you to take part in surveys, competitions or promotions</li>
<li>When you contact our Customer Services team in store, online or over the phone or via web chat</li>
<li>When you engage with us on social media (by mentioning/tagging us or by contacting us directly)</li>
<li>When your image may be captured via our CCTV system or body camera worn by our security team. Your car number plate may also be captured by our ANPR system</li>
</ul>
    </div>
  </div>
  <div>
    <input type="radio" name="example_accordion" id="section3" class="accordion__input">
    <label for="section3" class="accordion__label">How?</label>
    <div class="accordion__content">
     <strong><h>How do we use your personal data and what are our legal justifications for doing so?</h></strong> 
      <p>
      There are a number of different reasons why we might use your personal data, depending on what type of data you have provided. You do not have to provide any of this personal data to us but if you don’t, we might not be able to make our products and services available to you, your overall shopping experience may be less personalised and it is less likely that you will receive our best overall customer experience.
      </p>
      <p>Personal data: Name and contact details:</p>
      <ol>
<li>To fulfil your order, take payment from you i.e. taking payment, update you regarding the status of your order and shipping the order to you (including the printing of labels).<br><strong>Why we do it<br></strong>We rely on our contractual arrangements with you as the lawful basis on which we collect and process your personal data when you make an order for products and services.</li>
<li>To manage any issues during order fulfilment. This would also include / click and collect / refunds / planning and measuring services and returns.<br><strong>Why we do it</strong><br>We've got to do this to perform our contract with you. We may also keep a record of this to comply with our legal obligations.</li>
<li>To register you as an TresorLDN registered customer for an TresorLDN profile with us.<br><strong>Why we do it<br></strong>We've got to do this to perform our contract with you. If you have not yet purchased anything from us, we will ask you if you want to consent to email, SMS and direct mail marketing through this registration.</li>
<li>To sign you up to receive our email Newsletters by submitting your details via our online form.<br><strong>Why we do it</strong><br>You consent to receive our email Newsletters if you chose to sign up by completing and submitting our online form. You can opt out of these at any time through your account settings.</li>
<li>To register you for an TresorLDN Family membership account.<br><strong>Why we do it</strong><br>We've got to do this to perform our contract with you.</li>
<li>To update you regarding your TresorLDN Family account.<br><strong>Why we do it</strong><br>We've got to do this to perform our contract with you.</li>
<li>To send you offers, promotions and events for TresorLDN Family members. <br><strong>Why we do it<br></strong>TresorLDN has legitimate interest to send you promotions relevant to the TresorLDN Family scheme. You can opt out of these at any time through your account settings.</li>
<li>To verify your identity when you access your TresorLDN profile, TresorLDN Family Membership Account, or to contact you to perform security checks when you speak to Customer Services.<br><strong>Why we do it</strong><br>TresorLDN has legitimate interest in ensuring that you are who you say you are to ensure good and services are provided to the correct person.</li>
<li>In the detection and prevention of fraud or other crimes.<br><strong>Why we do it</strong><br>TresorLDN has legitimate interest in protecting itself from Fraud.</li>
<li>To monitor and improve the services and the Website, including monitoring browsing activity and session replays.<br><strong>Why we do it</strong><br>TresorLDN has legitimate interest in monitoring the websites to improve customer experience.</li>
<li>To be able to return any lost items to you or record any incidents or accidents in store<br><strong>Why we do it</strong><br>You have legitimate interest in providing this information to TresorLDN to ensure we can manage any of the occurrences that may occur in store.</li>
<li>To send you an email that you have abandoned your basket or, for existing customers (subject to your preferences), where we send you updates on items you have been browsing.<br><strong>Why we do it</strong><br>TresorLDN has legitimate interest to sell its products, including checking to see if customers want to continue processing their order.</li>
<li>To invite you to take part in surveys such as pulse CX, abandon basket and the TresorLDN App, online surveys on the website NPS – rate and reviews industry benchmark, search survey – how happy were you with search result.<br><strong>Why we do it</strong><br>TresorLDN has a legitimate interest in selling its products and improving our customer experience. We don't need your consent to send you these communications but they will not include any promotional content unless you have opted-in to receive marketing from us. We use responses from surveys to monitor and improve the quality of our products and services and your overall customer experience.</li>
<li>To send you marketing promotions, offers, competitions and events by email, post, phone and SMS for TresorLDN goods and services, (subject to your preferences). Please see the section below on Marketing for more information. <br><strong>Why we do it</strong><br>We will do this based on the consent you give us when you register with us online or join the TresorLDN Family loyalty club. You are free to opt-out of receiving these communications at any time.</li>
<li>To administer any prize draws or competitions that you choose to enter. We sometimes use third parties to help us do this - we will make this clear in the terms and conditions of the prize draw or competition.<br><strong>Why we do it</strong><br>We will do this based on the consent you give us when you enter. If a third party will use these details to contact you directly as part of the prize draw or competition, we will ask for your consent to that third party contacting you.</li>
<li>To send you communications via selected channels push notifications that you sign up to via your personal device to keep you up to date with our latest offers, products and promotions.<br><strong>Why we do it</strong><br>We will do this based on the consent you give us when you sign up to receive these notifications. You can stop receiving these at any time. Please see our Marketing section for more details.</li>
<li>To process and manage your booking/appointment.<br><strong>Why we do it</strong><br>We've got to do this to perform our contract with you and to enable us to set up the appointment and arrange this with you.</li>
<li>To combine aggregated information about our customers (that doesn't identify those customers) to help us track performance and improve the services we offer. Some of this data will be shared with selected third parties such as Google Analytics etc.<br><strong>Why we do it</strong><br>TresorLDN has legitimate interest in analysing this information to improve customer experience.</li>
<li>To send you service emails or communications required by law to update you about any changes to our goods and services, any information required by law relating to your order or product recalls.<br><strong>Why we do it</strong><br>We need to do this to comply with our legal obligations. We don't need your consent to send you these communications but they will not include any promotional content.</li>
<li>To develop and test any changes or improvements to our Websites, goods or services.<br><strong>Why we do it</strong><br>TresorLDN has legitimate interest in developing and testing our goods and services to improve customer experience.<br><br></li>
</ol>
<P>Your payment details:</P>
<ol>
<li>To fulfil your order, i.e. taking payment, updating you regarding the status of your order and shipping the order to you. As well as managing any issues during order fulfilment.<br><strong>Why we do it</strong><br>We've got to do this to perform our contract with you and our contracts with partners and suppliers who work with us to provide a service to you.</li>
<li>To analyse customer spend within our stores and online.<br><strong>Why we do it</strong><br>TresorLDN has legitimate interest in analysing this information to improve customer experience.</li>
</ol>
<p>Your login and password:</p> 
<ol>
<li>To verify your identity when you access your account.<br><strong>Why we do it</strong><br>TresorLDN has legitimate interest in ensuring that you are who you say you are to ensure goods and services are provided to the correct person.</li>
</ol>
    </div>
  </div>
  <div>
    <input type="radio" name="example_accordion" id="section4" class="accordion__input">
    <label for="section4" class="accordion__label">Who?</label>
    <div class="accordion__content">
      <strong><h>Who do we share your personal data with?</h></strong>
      <p>
      We will never sell any of your personal data to a third party. However, in order for us to provide our services to you, we share your personal data with our trusted third party service providers or our group companies, as detailed below. Whenever we share your personal data, we put safeguards in place which require these organisations to keep your data safe and to ensure that they do not use your personal data for their own marketing purposes.
      </p>
      <h>Third party service providers to fulfil orders for products and services</h>
      <p>
        We work with a number of trusted service providers who carry out services on our behalf. When you purchase products and services from us, the services provided by these organisations includes delivery, product assembly and installation, waste removal and processing payments. We also work with a service provider to administer our gift card and account services. It is in our legitimate interests as a business to work with these service providers since we may not have the capabilities to provide these services ourselves. In each case, we will ensure that the service provider is only allowed to use your personal data in order to provide the services to us and for no other purpose.
      </p>
      <h>To prevent crime and comply with laws</h>
      <p>
        We share your financial information including your credit, debit card or other payment information with third parties to ensure that your payment is safe and that your details are not being used fraudulently. This data sharing enables us to conduct fraud analysis which ensures that genuine and accurate payment details are provided to us for any purchase. We may share your personal data with credit agencies if you are requesting credit. There may be other scenarios where we are subject to a legal obligation to share or disclose your personal data, such as with law enforcement agencies or public authorities in order to prevent or detect crime or fulfil a legal requirement. For the purposes of preventing crime, TresorLDN will use its legitimate interests to share certain information with third parties with which it has data processing agreements. This may include CCTV and other potentially identifiable information collected during TresorLDN's monitoring, detection, crime and safety activities.
      </p>
    </div>
  </div>
<div>
    <input type="radio" name="example_accordion" id="section5" class="accordion__input">
    <label for="section5" class="accordion__label">Rights</label>
    <div class="accordion__content">
      <strong><h>Your rights</h></strong>
      <p>
      You have a number of rights relating to your personal data and what happens to it. You are entitled to:
      </p>
      <ul>
<li>have your data processed in a fair, lawful and transparent way;</li>
<li>be informed about how your personal data is being used, an example being this privacy policy;</li>
<li>access personal data we hold about you;</li>
<li>require us to correct any mistakes in your personal data;</li>
<li>require us to delete personal data concerning you in certain situations where there is no good reason for us to continue to process it;</li>
<li>request that we transfer your personal data to you or another service provider in a simple, structured format;</li>
<li>object at any time to processing of your personal data for direct marketing purposes;</li>
<li>object to automated decision making which produces legal effects concerning you or similarly significantly affects you;</li>
<li>object in certain other situations to our continued processing of your personal data; and</li>
<li>otherwise restrict or temporarily stop our processing of your personal data in certain circumstances.</li>
</ul>
    </div>
  </div>
  <div>
    <input type="radio" name="example_accordion" id="section6" class="accordion__input">
    <label for="section6" class="accordion__label">Preferences</label>
    <div class="accordion__content">
    <strong><h>Changing your preferences</h></strong>
      <p>
      If you no longer wish to be contacted by us about our products or services, or for other marketing purposes, you can amend your preferences or unsubscribe by contacting us. Alternatively, if you have a profile on the TresorLDN website or have downloaded the TresorLDN App, you can unsubscribe by logging into your account, or simply follow the unsubscribe link provided in emails you receive from us.
      We want to ensure that all the information we have about our customers is factually correct and up to date. If you find that the personal data we have about you is inaccurate or needs updating (for instance, you may have changed your name or address) then please contact us so that we can correct it. If you have created a profile on the TresorLDN website or TresorLDN App, you can change the details stored about you by logging into your account.
      </p>
    </div>
  </div>
  <div>
    <input type="radio" name="example_accordion" id="section7" class="accordion__input">
    <label for="section7" class="accordion__label">Security &amp; retention</label>
    <div class="accordion__content">
      <strong><h>Security and retention of your personal data</h></strong>
      <p> Security of your personal data </p>
      <p>We take the security of your personal data very seriously. We have implemented various strategies, controls, policies and measures to keep your data secure and keep these measures under close review. We protect your data by using encryption techniques and we use other safeguards such as firewalls and password protection. This means that your data is protected and only accessible by co-workers who need it to carry out their job responsibilities. We also ensure that there are strict physical controls in our buildings which restricts access to your personal data to keep it safe.</p>
      <p>Retention of your personal data:</p>
      <p>
      In broad terms, we will only retain your personal data for as long as is necessary for the purposes described in this Privacy policy. This means that the retention periods will vary according to the type of the data and the reason that we have the data in the first place.
      We have procedures in place regarding our retention periods which we keep under review taking into account our reasons for processing your personal data and the legal basis for doing so.
      </p>
    </div>
  </div>
  <div>
    <input type="radio" name="example_accordion" id="section8" class="accordion__input">
    <label for="section8" class="accordion__label">Cookies</label>
    <div class="accordion__content">
      <strong><h>Cookies</h></strong>
      <p>
      Cookies are small encrypted text files that are stored on your device by a website. Our Websites use cookies to enable you to shop, enhance your shopping experience and to analyse our traffic.
      For further information visit http://aboutcookies.org.uk/
      You can set your browser not to accept cookies and the above website tells you how to remove cookies from your browser. However, in a few cases some of our Website features may not function as a result.
      </p>
      <h>What are cookies?</h>
    </div>
  </div>
</div>
</div>

@endsection
