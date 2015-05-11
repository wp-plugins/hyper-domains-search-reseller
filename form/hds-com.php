<?php



function add_form_hds_com(){



?>





<div class="hds_wrap_h">

<h4><?php $options = get_option('hds_options'); echo $options['text_string3'] ?></h4>

</div>

<div class="hds_wrap_2">

 <form name="lookup"  action="<?php $options = get_option('hds_options'); echo $options['text_string1']?>/domain-registration/transfer/index.php" method="post" target="_new">

  <input type="hidden" name="action" value="domain_transfer_summary">
  <input type="hidden" name="nextstep" value="true">
  <input type="hidden" name="dom_action" value="transfer">
  <table border="0" cellpadding="0" cellspacing="0" class="dataTable">
  <tr>
  <td width="35%" class="frmLabel"><label for="Domain Name Transfer">Domain 
  Name</label></td>
  <td width="4%" class="required">*</td>
  <td><INPUT TYPE="text" NAME="domainname" SIZE="24" placeholder="YourDomainHere..." value="">
  
 <b>.</b>  
  
  <select name="tlds">
        <option value="com">com</option>
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
        <option value="mobi">.mobi</option>
        <option value="mn">.mn</option>
        <option value="bz">.bz</option>
        <option value="cc">.cc</option>
        <option value="tv">.tv</option>
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
  </select>
  </select>
  </td>
  </tr>
  <tr>
   <td width="30%" class="frmLabel"><label for="Transfer Auth">Transfer Auth 
  Code</label>
  <p>(Also known as: "Transfer Secret" or "EPP Auth Code")</p>
  </td>
  <td width="1%" class="required"></td>
  <td colspan="2"><INPUT TYPE="text" NAME="secretname"></td>
  </tr>
  <tr>
  <td class="frmLabel">&nbsp;</td>
  <td class="required">&nbsp;</td>
  <td colspan="2">
        <p>The Domain Transfer Auth Code needs to be obtained from the current Registrar of the domain name that you wish to transfer. <a href="http://hyperdomains.myorderbox.com/kb/servlet/KBServlet/faq1188.html" target="_new">Learn More</a></p>
  </td>
  </tr>
  <tr>
  <td colspan="4" align="center">
  <input name="transfer" type="submit" value="Transfer">
  </td>
  <tr>
  </table>
  </form>



<?php



}



add_shortcode('Domain Transfer', 'add_form_hds_com');



?>