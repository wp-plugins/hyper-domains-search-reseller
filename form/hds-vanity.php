<?php







// hds Full TDL List Shortcode to display search form on any page or post.







function add_form_hds_vanity(){







?>







<div class="hds_wrap_h">





<h4><?php $options = get_option('hds_options'); echo $options['text_string4'] ?></h4>



</div>





<div class="hds_wrap">



<form name="lookup"  action="<?php $options = get_option('hds_options'); echo $options['text_string1']?>/domain-registration/index.php" method="post" target="_new">



<input type="hidden" name="action" value="check_availability"> <p><em><input type="hidden" name="showrelated" value="true"></em></p>



<p><em><input type="hidden" name="showrelated"  value="true"></em></p>



        



        <input name="txtDomainName" type="text" placeholder="YourDomainHere..." maxlength="24" size="24" class="inputbox" >



        



        <b>.</b> 



        <select name="tld[]">



        <option value="accountants" selected>accountants</option>



        <option value="actor">actor</option>



        <option value="attorney">attorney</option>
        
        
        
        <option value="auction">auction</option>



        <option value="audio">audio</option>



        <option value="bar">bar</option>



        <option value="beer">beer</option>



        <option value="berlin">berlin</option>



        <option value="bid">bid</option>



        <option value="biz">biz</option>
        
        
        
         <option value="blackfriday">blackfriday</option>



        <option value="blue">blue</option>



        <option value="build">build</option>



        <option value="buzz">buzz</option>



        <option value="club">club</option>



        <option value="church">church</option>



        <option value="creditcard">creditcard</option>



        <option value="credit">credit</option>



        <option value="consulting">consulting</option>



        <option value="cooking">cooking</option>



        <option value="country">country</option>



        <option value="click">click</option>



        <option value="christmas">christmas</option>



        <option value="cricket">cricket</option>



        <option value="capetown">capetown</option>



        <option value="casa">casa</option>



        <option value="dance">dance</option>
        
        
        
        <option value="degree">degree</option>
        
        
        
        <option value="democrat">democrat</option>



        <option value="dentist">dentist</option>
        
        
        
        <option value="desi">desi</option>



        <option value="durban">durban</option>



        <option value="engineer">engineer</option>



        <option value="energy">energy</option>



        <option value="fashion">fashion</option>



        <option value="fit">fit</option>
        
        
        
        <option value="fishing">fishing</option>



        <option value="flowers">flowers</option>
        
        
        
        <option value="forsale">forsale</option>



        <option value="futbol">futbol</option>



        <option value="garden">garden</option>
        
        
        
       <option value="gift">gift</option> 



        <option value="global">global</option>



        <option value="green">green</option>



        <option value="guitars">guitars</option>
        
        
        
        <option value="haus">haus</option>
        
        
        
        <option value="help">help</option>
        
        
        
       <option value="hiphop">hiphop</option>
       
       
       
       <option value="horse">horse</option> 



        <option value="host">host</option>



        <option value="hosting">hosting</option>



        <option value="ink">ink</option>
        
        
        
        <option value="investments">investments</option>



        <option value="jobs">jobs</option>



        <option value="kim">kim</option>



        <option value="la">la</option>
        
        
        
        <option value="lawyer">lawyer</option>
        
        
        
        <option value="link">link</option>



        <option value="loans">loans</option>
        
        
        
        <option value="london">london</option>
        
        
        
        <option value="luxury">luxury</option>
        
        
        
        <option value="market">market</option>
        
        
        
        <option value="menu">menu</option>
        
        
        
        <option value="moda">moda</option>
        
        
        
        <option value="mortgage">mortgage</option>
        
        
        
        <option value="name">name</option>
        
        
        
        <option value="ninja">ninja</option>
        
        
                
        <option value="nyc">nyc</option>
        
        
        
        <option value="ooo">ooo</option>
        
        
        
        <option value="party">party</option>
        
        
        
        <option value="pics">pics</option>
        
        
        
       <option value="pictures">pictures</option> 
        
        
        
        <option value="pink">pink</option>
        
        
        
        <option value="photo">photo</option>
        
        
        
       <option value="press">press</option> 
       
       
       
       <option value="property">property</option>
       
       
       
       <option value="pub">pub</option>
       
       
       
       <option value="quebec">quebec</option>
       
       
       
       <option value="red">red</option>
       
       
       
       <option value="rest">rest</option>
       
       
       
       <option value="reviews">reviews</option>
       
       
       
       <option value="rocks">rocks</option>
       
       
       
       <option value="rodeo">rodeo</option>
       
       
       
       <option value="sale">sale</option>
       
       
       
       <option value="science">science</option>
       
       
       
       <option value="site">site</option>
       
       
       
       <option value="sexy">sexy</option>
       
       
       
       <option value="social">social</option>
       
       
       
       <option value="software">software</option>
       
       
       
       <option value="soy">soy</option>
       
       
       
       <option value="space">space</option>
       
       
       
       <option value="surf">surf</option>
       
       
       
       <option value="tattoo">tattoo</option>
       
       
       
       <option value="tech">tech</option>
       
       
       
       <option value="tires">tires</option>
       
       
       
       <option value="tokyo">tokyo</option>
       
       
       
       <option value="trade">trade</option>
       
       
       
       <option value="uno">uno</option>
       
       
       
       <option value="vegas">vegas</option>
       
       
       
       <option value="video">video</option>
       
       
       
       <option value="vodka">vodka</option>
       
       
       
       <option value="wang">wang</option>
       
       
       
       <option value="webcam">webcam</option>
       
           
       
       <option value="website">website</option>
       
             
       
       <option value="wedding">wedding</option>
       
       
       
       <option value="wiki">wiki</option>
       
       
       
      <option value="work">work</option>
      
      
      
      <option value="xyz">xyz</option> 
      
       
        
        
        



        



        </select>



        </td>



        



        <td><input type="submit"></td>



        </tr>



        </form>











<div style="clear:both"> </div>







</div>







<?php







}







add_shortcode('Vanity Domains', 'add_form_hds_vanity');







?>