<?php







// hds Full TDL List Shortcode to display search form on any page or post.







function add_form_hds_search(){







?>







<div class="hds_wrap_h">





<h4><?php $options = get_option('hds_options'); echo $options['text_string2'] ?></h4>



</div>





<div class="hds_wrap">



<form name="lookup"  action="<?php $options = get_option('hds_options'); echo $options['text_string1']?>/domain-registration/index.php" method="post" target="_new">



<input type="hidden" name="action" value="check_availability"> <p><em><input type="hidden" name="showrelated" value="true"></em></p>



<p><em><input type="hidden" name="showrelated"  value="true"></em></p>



        



        <input name="txtDomainName" type="text" placeholder="YourDomainHere..." maxlength="24" size="24" class="inputbox" >



        



        <b>.</b> 



        <select name="tld[]">



        <option value="com" selected>com</option>



        <option value="net">net</option>



        <option value="org">org</option>



        <option value="biz">biz</option>



        <option value="name">name</option>



        <option value="us">us</option>



        <option value="info">info</option>



        <option value="in">in</option>



        <option value="co.in">co.in</option>



        <option value="net.in">net.in</option>



        <option value="org.in">org.in</option>



        <option value="firm.in">firm.in</option>



        <option value="gen.in">gen.in</option>



        <option value="ind.in">ind.in</option>



        <option value="eu">eu</option>



        <option value="mobi">mobi</option>



        <option value="mn">mn</option>



        <option value="bz">bz</option>



        <option value="cc">cc</option>



        <option value="tv">tv</option>



        <option value="eu.com">eu.com</option>



        <option value="gb.com">gb.com</option>



        <option value="ae.org">ae.org</option>



        <option value="kr.com">kr.com</option>



        <option value="us.com">us.com</option>



        <option value="qc.com">qc.com</option>



        <option value="de.com">de.com</option>



        <option value="gb.net">gb.net</option>



        <option value="no.com">no.com</option>



        <option value="hu.com">hu.com</option>



        <option value="jpn.com">jpn.com</option>



        <option value="uy.com">uy.com</option>



        <option value="za.com">za.com</option>



        <option value="br.com">br.com</option>



        <option value="cn.com">cn.com</option>



        <option value="sa.com">sa.com</option>



        <option value="se.com">se.com</option>



        <option value="se.net">se.net</option>



        <option value="uk.com">uk.com</option>



        <option value="uk.net">uk.net</option>



        <option value="ru.com">ru.com</option>



        <option value="ws">ws</option>



        <option value="co.uk">co.uk</option>



        <option value="org.uk">org.uk</option>



        <option value="me.uk">me.uk</option>



        



        </select>



        </td>



        



        <td><input type="submit"></td>



        </tr>



        </form>











<div style="clear:both"> </div>







</div>







<?php







}







add_shortcode('Domain Search', 'add_form_hds_search');







?>