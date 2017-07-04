
<?php get_header(); ?>


<?php 

    function getFieldsL($gf){

        $f_industry = $gf; 
        $fields_industry = explode(PHP_EOL, $f_industry);

        $tf = count($fields_industry);

        for ($i=0; $i < $tf; $i++) { 
            $sfield .= '<option value="'.$fields_industry[$i].'">'.$fields_industry[$i].'</option>';
        }

        return $sfield;
    }
 ?>

</div>
   
 


  
    <div class="wrapper wrapper-1200">

        <form action="<?php echo get_template_directory_uri(); ?>/ev-form/php/mail-demo.php" method="post" class="j-forms j-multistep" id="j-forms" enctype="multipart/form-data" novalidate>



            <!-- end /.header-->

            <div class="content">

            
        
        

        <div class="bginfo">


            <p class="text-center titulotext"><?php the_field('introinfo'); ?></p>


                        <div class="j-row">
                        <div class="span6 text-center">
                            <div class="unit">
                            <label class="label text-center"><?php the_field('platform'); ?></label>
                                <div class="inline-group">
                                    <label class="radio">
                                        <input type="radio" name="platform" value="GMG+" checked="">
                                        <i></i>
                                        GMG+
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="platform" value="MT4">
                                        <i></i>
                                        MT4
                                    </label>
            
                                </div>
                            </div>
                        </div>


                        <div class="span6 text-center">
                            <div class="unit">
                            <label class="label text-center"><?php the_field('currency'); ?></label>
                                <div class="inline-group">
                                    <label class="radio">
                                        <input type="radio" name="accountbasecurrency" value="EUR">
                                        <i></i>
                                        EUR
                                    </label>
                                    <label class=   "radio">
                                        <input type="radio" name="accountbasecurrency" value="GBP">
                                        <i></i>
                                        GBP
                                    </label>
                                    <label class=   "radio">
                                        <input type="radio" name="accountbasecurrency" value="USD" checked="">
                                        <i></i>
                                        USD
                                    </label>
            
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="j-row">
                        <div class="span2">
                            <label class="label"><?php the_field('title'); ?></label>
                            <div class="unit">
                                <label class="input select">
                                    <select name="title">
                                        <option value="none" selected="" disabled=""></option>
                                            <?php print getFieldsL(get_field('titlefields')); ?>
                                    </select>
                                    <i></i>
                                </label>
                            </div>
                        </div>

                    

                        <div class="span5">
                            <div class="unit">
                            <label class="label"><?php the_field('firstname'); ?></label>
                                <div class="input">
                                    <label class="icon-left" for="name">
                                        <i class="fa fa-user"></i>
                                    </label>
                                    <input type="text" id="name" name="first_name">
                                </div>
                            </div>
                        </div>


                        <div class="span5">
                            <div class="unit">
                            <label class="label"><?php the_field('lastname'); ?></label>
                                <div class="input">
                                <label class="icon-left" for="name">
                                        <i class="fa fa-user"></i>
                                    </label>
                                    <input type="text" id="lname" name="last_name">
                                </div>
                            </div>
                        </div>


                    
                    </div>


                    <div class="j-row">



                        <div class="span6">
                            <div class="unit">
                            <label class="label"><?php the_field('countryofresidence'); ?></label>
                                <div class="input">
                                    <label class="input select">
                                    <select name="countryphone" id="countryphone">

<option value=""><?php the_field('pleaseselect'); ?></option>
<option data-code="44" value="united_kingdom">United Kingdom</option>
<option data-code="1" value="united_states">United States</option>
<option data-code="93" value="afghanistan">Afghanistan</option> 
<option data-code="355" value="albania">Albania</option>
<option data-code="213" value="algeria">Algeria</option>
<option data-code="685" value="american_samoa">American Samoa</option>
<option data-code="376" value="andorra">Andorra</option>
<option data-code="244" value="angola">Angola</option>
<option data-code="1" value="anguilla">Anguilla</option>
<option data-code="1" value="antigua_and_barbuda">Antigua and Barbuda</option>
<option data-code="54" value="argentina">Argentina</option>
<option data-code="374" value="armenia">Armenia</option>
<option data-code="297" value="aruba">Aruba</option>
<option data-code="61" value="australia">Australia</option>
<option data-code="43" value="austria">Austria</option>
<option data-code="994" value="azerbaijan">Azerbaijan</option>
<option data-code="1" value="bahamas">Bahamas</option>
<option data-code="973" value="bahrain">Bahrain</option>
<option data-code="880" value="bangladesh">Bangladesh</option>
<option data-code="1" value="barbados">Barbados</option>
<option data-code="375" value="belarus">Belarus</option>
<option data-code="32" value="belgium">Belgium</option>
<option data-code="501" value="belize">Belize</option>
<option data-code="229" value="benin">Benin</option>
<option data-code="1" value="bermuda">Bermuda</option>
<option data-code="975" value="bhutan">Bhutan</option>
<option data-code="591" value="bolivia">Bolivia</option>
<option data-code="387" value="bosnia_and_herzegovina">Bosnia and Herzegovina</option>
<option data-code="267" value="botswana">Botswana</option>
<option data-code="55" value="brazil">Brazil</option>
<option data-code="284" value="british_virgin_islands">British Virgin Islands</option>
<option data-code="673" value="brunei">Brunei</option>
<option data-code="359" value="bulgaria">Bulgaria</option>
<option data-code="226" value="burkina_faso">Burkina Faso</option>
<option data-code="257" value="burundi">Burundi</option>
<option data-code="855" value="cambodia">Cambodia</option>
<option data-code="237" value="cameroon">Cameroon</option>
<option data-code="1" value="canada">Canada</option>
<option data-code="238" value="cape_verde_islands">Cape Verde Islands</option>
<option data-code="1" value="cayman_islands">Cayman Islands</option>
<option data-code="236" value="central_african_republic">Central African Republic</option>
<option data-code="235" value="chad">Chad</option>
<option data-code="56" value="chile">Chile</option>
<option data-code="86" value="china">China</option>
<option data-code="57" value="colombia">Colombia</option>
<option data-code="269" value="comoros">Comoros</option>
<option data-code="242" value="congo">Congo</option>
<option data-code="506" value="costa_rica">Costa Rica</option>
<option data-code="385" value="croatia">Croatia</option>
<option data-code="53" value="cuba">Cuba</option>
<option data-code="357" value="cyprus">Cyprus</option>
<option data-code="420" value="czech_republic">Czech Republic</option>
<option data-code="45" value="denmark">Denmark</option>
<option data-code="253" value="djibouti">Djibouti</option>
<option data-code="1" value="dominica">Dominica</option>
<option data-code="1" value="dominican_republic">Dominican Republic</option>
<option data-code="593" value="east_timor">East Timor</option>
<option data-code="593" value="ecuador">Ecuador</option>
<option data-code="20" value="egypt">Egypt</option>
<option data-code="503" value="el_salvador">El Salvador</option>
<option data-code="240" value="equatorial_guinea">Equatorial Guinea</option>
<option data-code="291" value="eritrea">Eritrea</option>
<option data-code="372" value="estonia">Estonia</option>
<option data-code="251" value="ethiopia">Ethiopia</option>
<option data-code="500" value="falkland_islands">Falkland Islands</option>
<option data-code="679" value="fiji">Fiji</option>
<option data-code="358" value="finland">Finland</option>
<option data-code="33" value="france">France</option>
<option data-code="241" value="gabon">Gabon</option>
<option data-code="220" value="gambia">Gambia</option>
<option data-code="995" value="georgia">Georgia</option>
<option data-code="49" value="germany">Germany</option>
<option data-code="233" value="ghana">Ghana</option>
<option data-code="350" value="gibraltar">Gibraltar</option>
<option data-code="30" value="greece">Greece</option>
<option data-code="1" value="grenada">Grenada</option>
<option data-code="299" value="greenland">Greenland</option>
<option data-code="1" value="guam">Guam</option>
<option data-code="502" value="guatemala">Guatemala</option>
<option data-code="224" value="guinea">Guinea</option>
<option data-code="245" value="guinea-bissau">Guinea-Bissau</option>
<option data-code="592" value="guyana">Guyana</option>
<option data-code="509" value="haiti">Haiti</option>
<option data-code="504" value="honduras">Honduras</option>
<option data-code="852" value="hong_kong">Hong Kong</option>
<option data-code="36" value="hungary">Hungary</option>
<option data-code="354" value="iceland">Iceland</option>
<option data-code="91" value="india">India</option>
<option data-code="62" value="indonesia">Indonesia</option>
<option data-code="98" value="iran">Iran</option>
<option data-code="964" value="iraq">Iraq</option>
<option data-code="353" value="ireland">Ireland</option>
<option data-code="972" value="israel">Israel</option>
<option data-code="39" value="italy">Italy</option>
<option data-code="225" value="ivory_coast">Ivory Coast</option>
<option data-code="1" value="jamaica">Jamaica</option>
<option data-code="81" value="japan">Japan</option>
<option data-code="962" value="jordan">Jordan</option>
<option data-code="7" value="kazakhstan">Kazakhstan</option>
<option data-code="254" value="kenya">Kenya</option>
<option data-code="686" value="kiribati">Kiribati</option>
<option data-code="965" value="kuwait">Kuwait</option>
<option data-code="996" value="kyrgyzstan">Kyrgyzstan</option>
<option data-code="856" value="laos">Laos</option>
<option data-code="371" value="latvia">Latvia</option>
<option data-code="961" value="lebanon">Lebanon</option>
<option data-code="266" value="lesotho">Lesotho</option>
<option data-code="231" value="liberia">Liberia</option>
<option data-code="231" value="libya">Libya</option>
<option data-code="423" value="liechtenstein">Liechtenstein</option>
<option data-code="370" value="lithuania">Lithuania</option>
<option data-code="352" value="luxembourg">Luxembourg</option>
<option data-code="853" value="macao">Macao</option>
<option data-code="389" value="macedonia">Macedonia</option>
<option data-code="261" value="madagascar">Madagascar</option>
<option data-code="265" value="malawi">Malawi</option>
<option data-code="60" value="malaysia">Malaysia</option>
<option data-code="960" value="maldives">Maldives</option>
<option data-code="223" value="mali">Mali</option>
<option data-code="356" value="malta">Malta</option>
<option data-code="692" value="marshall_islands">Marshal Islands</option>
<option data-code="222" value="mauritania">Mauritania</option>
<option data-code="230" value="mauritius">Mauritius</option>
<option data-code="52" value="mexico">Mexico</option>
<option data-code="691" value="micronesia">Micronesia</option>
<option data-code="373" value="moldova">Moldova</option>
<option data-code="377" value="monaco">Monaco</option>
<option data-code="976" value="mongolia">Mongolia</option>
<option data-code="382" value="montenegro">Montenegro</option>
<option data-code="212" value="morocco">Morocco</option>
<option data-code="258" value="mozambique">Mozambique</option>
<option data-code="95" value="myanmar">Myanmar</option>
<option data-code="264" value="namibia">Namibia</option>
<option data-code="674" value="nauru">Nauru</option>
<option data-code="977" value="nepal">Nepal</option>
<option data-code="31" value="netherlands">Netherlands</option>
<option data-code="599" value="netherlands_antilles">Netherlands Antilles</option>
<option data-code="64" value="new_zealand">New Zealand</option>
<option data-code="505" value="nicaragua">Nicaragua</option>
<option data-code="227" value="niger">Niger</option>
<option data-code="234" value="nigeria">Nigeria</option>
<option data-code="850" value="north_korea">North Korea</option>
<option data-code="47" value="norway">Norway</option>
<option data-code="968" value="oman">Oman</option>
<option data-code="92" value="pakistan">Pakistan</option>
<option data-code="680" value="palau">Palau</option>
<option data-code="507" value="panama">Panama</option>
<option data-code="675" value="papua_new_guinea">Papua New Guinea</option>
<option data-code="595" value="paraguay">Paraguay</option>
<option data-code="51" value="peru">Peru</option>
<option data-code="63" value="philippines">Philippines</option>
<option data-code="48" value="poland">Poland</option>
<option data-code="351" value="portugal">Portugal</option>
<option data-code="1" value="puerto_rico">Puerto Rico</option>
<option data-code="974" value="qatar">Qatar</option>
<option data-code="40" value="romania">Romania</option>
<option data-code="7" value="russia">Russia</option>
<option data-code="250" value="rwanda">Rwanda</option>
<option data-code="1" value="saint_kitts_and_nevis">Saint Kitts and Nevis</option>
<option data-code="1" value="saint_lucia">Saint Lucia</option>
<option data-code="684" value="samoa">Samoa</option>
<option data-code="378" value="san_marino">San Marino</option>
<option data-code="239" value="sao_tome_and_principe">Sao Tome and Principe</option>
<option data-code="966" value="saudi_arabia">Saudi Arabia</option>
<option data-code="221" value="senegal">Senegal</option>
<option data-code="381" value="serbia">Serbia</option>
<option data-code="248" value="seychelles">Seychelles</option>
<option data-code="232" value="sierra_leone">Sierra Leone</option>
<option data-code="232" value="singapore">Singapore</option>
<option data-code="421" value="slovak_republic">Slovak Republic</option>
<option data-code="386" value="slovenia">Slovenia</option>
<option data-code="677" value="solomon_islands">Solomon Islands</option>
<option data-code="252" value="somalia">Somalia</option>
<option data-code="27" value="south_africa">South Africa</option>
<option data-code="82" value="south_korea">South Korea</option>
<option data-code="34" value="spain">Spain</option>
<option data-code="94" value="sri_lanka">Sri Lanka</option>
<option data-code="290" value="st_helena">St Helena</option>
<option data-code="249" value="sudan">Sudan</option>
<option data-code="597" value="suriname">Suriname</option>
<option data-code="268" value="swaziland">Swaziland</option>
<option data-code="46" value="sweden">Sweden</option>
<option data-code="41" value="switzerland">Switzerland</option>
<option data-code="963" value="syria">Syria</option>
<option data-code="886" value="taiwan">Taiwan</option>
<option data-code="992" value="tajikistan">Tajikistan</option>
<option data-code="255" value="tanzania">Tanzania</option>
<option data-code="66" value="thailand">Thailand</option>
<option data-code="228" value="togo">Togo</option>
<option data-code="228" value="tonga">Tonga</option>
<option data-code="1" value="trinidad_and_tobago">Trinidad and Tobago</option>
<option data-code="216" value="tunisia">Tunisia</option>
<option data-code="90" value="turkey">Turkey</option>
<option data-code="649" value="turks_and_caicos">Turks and Caicos Islands</option>
<option data-code="993" value="turkmenistan">Turkmenistan</option>
<option data-code="688" value="tuvalu">Tuvalu</option>
<option data-code="256" value="uganda">Uganda</option>
<option data-code="380" value="ukraine">Ukraine</option>
<option data-code="971" value="united_arab_emirates">United Arab Emirates</option>
<option data-code="589" value="uruguay">Uruguay</option>
<option data-code="998" value="uzbekistan">Uzbekistan</option>
<option data-code="678" value="vanuatu">Vanuatu</option>
<option data-code="58" value="venezuela">Venezuela</option>
<option data-code="84" value="vietnam">Vietnam</option>
<option data-code="967" value="yemen">Yemen</option>
<option data-code="967" value="zaire">Zaire</option>
<option data-code="260" value="zambia">Zambia</option>
<option data-code="263" value="zimbabwe">Zimbabwe</option>

                                    </select><i></i></label>
                                </div>
                            </div>
                        </div>



                        <div class="span2">
                            <div class="unit">
                            <label class="label"><?php the_field('code'); ?></label>
                                <div class="input">
                                    <label >
                                    </label>
                                    <input type="text" id="ccode" name="ccode">
                                </div>
                            </div>
                        </div>

                        <div class="span4">
                            <div class="unit">
                            <label class="label"><?php the_field('mobilephonenumber'); ?></label>
                                <div class="input">
                                    <label class="icon-left" for="phone">
                                        <i class="fa fa-phone"></i>
                                    </label>
                                    <input type="text" name="ptelephone" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" >

                                </div>
                            </div>
                        </div>

                        
                    </div>

                    

                    <div class="j-row">

                        <div class="span4">
                            <div class="unit">
                            <label class="label"><?php the_field('emailaddress'); ?></label>
                                <div class="input">
                                    <label class="icon-left" for="email">
                                        <i class="fa fa-envelope-o"></i>
                                    </label>
                                    <input type="email" id="email" name="email">
                                </div>
                            </div>
                        </div>



                        <div class="span4">
                            <div class="unit">
                            <label class="label"><?php the_field('password'); ?></label>
                                <div class="input">
                                    <label class="icon-left" for="password">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                    <input type="password" id="password" name="password4">
                                </div>
                            </div>
                        </div>


                        <div class="span4">
                            <div class="unit">
                            <label class="label"><?php the_field('confirmpassword'); ?></label>
                                <div class="input">
                                    <label class="icon-left" for="password">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                    <input type="password" id="password2" name="password4b">
                                </div>
                            </div>
                        </div>


                    </div>              


            


        </div> <!-- end .bginfo -->

        
            <!-- start response from server -->
                <div id="response"></div>
            <!-- end response from server -->


            </div>
            <!-- end /.content -->



            <div class="footer">
                <button type="submit" class="primary-btn multi-next-btn"><?php the_field('send'); ?></button>
            </div>
            <!-- end /.footer -->

        </form>
    </div>
    <script>
        $(document).ready(function(){

            // Phone masking
            $("#phone").mask('(999) 999-9999', {placeholder:'x'});

            // Popup time interval
            $(function() {

        
                /* Setup Datepicker */
                $('.date-picker').datepicker({
                    dateFormat: 'mm/dd/yy',
                    prevText: '<i class="fa fa-caret-left"></i>',
                    nextText: '<i class="fa fa-caret-right"></i>',
                    changeYear: true,
                    changeMonth: true,
                    maxDate: 'now',
                    minDate: '-100y',
                    yearRange: '-100y:now',
                });

                
                // Date
                $("#date").mask('99/99/9999', {placeholder:'mm/dd/yyyy'});

                $( "#date_from" ).datepicker({
                    dateFormat: 'mm/dd/yy',
                    prevText: '<i class="fa fa-caret-left"></i>',
                    nextText: '<i class="fa fa-caret-right"></i>',
                    changeYear: true,
                    changeMonth: true,
                    onClose: function( selectedDate ) {
                        $( "#date_to" ).datepicker( "option", "minDate", selectedDate );
                    }
                });
                $( "#date_to" ).datepicker({
                    dateFormat: 'mm/dd/yy',
                    prevText: '<i class="fa fa-caret-left"></i>',
                    nextText: '<i class="fa fa-caret-right"></i>',
                    onClose: function( selectedDate ) {
                        $( "#date_from" ).datepicker( "option", "maxDate", selectedDate );
                    }
                });
            });

        });
    </script>


     

 </div> <!-- /wrapper -->
<?php get_footer(); ?>
