<?php

/* perizinan/perizinanv.twig */
class __TwigTemplate_75428bc016d50978a5eb8424950080f114cce52c609b361f05c84a585a2b2f5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form method=\"POST\" id=\"form_perizinan_siswa\">

   <div class=\"col-sm-12\">
      <b>Pencarian Siswa</b>
      <!-- <div class=\"form-group\"> -->
      <select name=\"cari_siswa\" class=\"form-control show-tick\" data-live-search=\"true\" onchange=\"changeFunc();\" id=\"cari_siswa\">

         <option value=\"\"></option>
         ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 10
            echo "         <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nis", array()), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namasiswa", array()), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "kelas", array()), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namaayah", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nis", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namasiswa", array()), "html", null, true);
            echo " Kelas ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "kelas", array()), "html", null, true);
            echo " Bin/ti ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "namaayah", array()), "html", null, true);
            echo "</option>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
      </select>
      <div class=\"form-group\">
         <div id=\"error_box\"></div>
      </div>
      <!-- </div> -->
   </div>

   <!-- batas -->

   <div class=\"col-sm-12\">
      <!-- <b>Data Siswa</b> -->
      <div class=\"form-group\">

         <input id=\"nis\" name=\"nis\" type=\"text\" class=\"form-control\" readonly />
         <input id=\"namasiswa\" name=\"namasiswa\" type=\"text\" class=\"form-control\" readonly />
         <input id=\"kelas\" name=\"kelas\" type=\"text\" class=\"form-control\" readonly />
         <input id=\"namaayah\" name=\"namaayah\" type=\"text\" class=\"form-control\" readonly />

      </div>
   </div>

   <div class=\"col-sm-3\">
      <b>Tanggal</b>
      <div class=\"form-group\">
         <!-- <div class=\"form-line\"> -->
         <input size=\"15\" class=\"form-control\" type=\"text\" name=\"tanggalizin\" id=\"tanggalInput\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, " now ", "Y-m-d "), "html", null, true);
        echo "\" required />
         <!-- </div> -->
      </div>
   </div>

   <div class=\"col-sm-9\">
      <b>Penjemput</b>
      <div class=\"form-group\">
         <div class=\"form-line\">
            <input name=\"penjemput\" type=\"text\" class=\"form-control\" />
         </div>
      </div>
   </div>


   <div class=\"col-sm-12\">
      <b>Catatan</b>
      <div class=\"form-group\">
         <div class=\"form-line\">
            <input name=\"catatan\" type=\"text\" class=\"form-control\" />
         </div>
      </div>
   </div>


   <div class=\"col-sm-12\">
      <div class=\"form-group\">
         <input type=\"hidden\" name=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["csrf_name"]) ? $context["csrf_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_hash"]) ? $context["csrf_hash"] : null), "html", null, true);
        echo "\" style=\"display: none\">
         <button type=\"reset\" class=\"btn btn-danger waves-effect\">Batalkan Isian</button>
         <button class=\"btn btn-primary waves-effect\" type=\"submit\" id='btn-modal'>Simpan Data</button>

      </div>
   </div>
</form>


<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
   <div class=\"modal-dialog\" style=\"width:80%\">
      <div class=\"modal-content\">
         <div id=\"print-letter\">
            <div style=\"text-align: center;\">
               <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "gambar/kopnota.png\" style=\"width: 80%;\">
            </div>
            <br>
            <table width=\"100%\" class=\"table-p\">
               <tbody>
                  <tr>
                     <td></td>
                     <td class=\"width-prints\">Nama Siswa</td>
                     <td style=\"width: 1%;\">:</td>
                     <td id=\"modalnamasiswa\" width=\"30%\"></td>
                     <td width=\"15%\"></td>
                     <td style=\"width: 10%;\" class=\"width-prints\">Nama Ayah </td>
                     <td style=\"width: 1%;\">:</td>
                     <td style=\"width: 30%;\" id=\"modalnamaayah\"></td>
                  </tr>
                  <tr>
                     <td width=\"50px\"></td>
                     <td style=\"width: 10%;\">Kelas</td>
                     <td style=\"width: 1%;\">:</td>
                     <td id=\"modalkelas\"></td>
                     <td style=\"width: 20%\"></td>
                  </tr>
               </tbody>
            </table>
            <table width=\"100%\" style=\"line-height: 1px dashed #333;\">
               <tr>
                  <td style=\"width: 10em;\"></td>
                  <td>
                     <h4 style=\"text-align: center;margin: 1.10em 0;\">Surat Izin </h4>
                  </td>
                  <td style=\"text-align: right; width: 10em;\"></td>
            </table>
            <table width=\"100%\" style=\"font-size: 14px\">
               <tbody>
                  <tr>
                     <td width=\"5%\"></td>
                     <td style=\"width: 15%;\">Tanggal Izin</td>
                     <td style=\"width: 1%;\">:</td>
                     <td id=\"modaltanggalizin\" width=\"200px\"></td>
                  </tr>
                  <tr>
                     <td width=\"50px\"></td>
                     <td>Penjemput</td>
                     <td>:</td>
                     <td id=\"modalpenjemput\"></td>
                  </tr>
                  <tr>
                     <td width=\"50px\"></td>
                     <td>Catatan</td>
                     <td>:</td>
                     <td id=\"modalcatatan\"></td>
                  </tr>
               </tbody>

            </table><br>
            <div style=\"border-bottom: 1px dashed #333; text-align: center;\">

            </div>
            <br><br>

            <table width=\"100%\" style=\"font-size: 14px\">
               <tbody>
                  <tr>
                     <td width=\"5%\"></td>
                     <td style=\"width: 15%;\"></td>
                     <td style=\"width: 5%;\"></td>
                     <td></td>
                     <td width=\"25%\"></td>
                     <td id=\"modaltanggal\" style=\"width: 15%;\"></td>
                     <td style=\"width: 5%;\"></td>
                     <td></td>
                  </tr>
                  <tr>
                     <td width=\"5%\"></td>
                     <td style=\"width: 15%;\"></td>
                     <td style=\"width: 5%;\"></td>
                     <td></td>
                     <td width=\"25%\"></td>
                     <td style=\"width: 15%;\" class=\"w-print\">Yang Memberi Izin</td>
                     <td></td>
                  </tr>
                  <tr>
                     <td><br><br></td>
                  </tr>
                  <tr>
                     <td width=\"5%\"></td>
                     <td style=\"width: 15%;\"></td>
                     <td style=\"width: 5%;\"></td>
                     <td></td>
                     <td width=\"25%\"></td>
                     <td id=\"modalpengguna\" style=\"width: 15%;\"></td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class=\"modal-body\">
            <p id=\"demo\"></p>
         </div>
         <div class=\"modal-footer\">

            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            <button type=\"button\" class=\"btn btn-primary\" id=\"btn-modal-print\">Print Perizinan</button>
         </div>

      </div>

   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "perizinan/perizinanv.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 79,  114 => 65,  84 => 38,  56 => 12,  33 => 10,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form method=\"POST\" id=\"form_perizinan_siswa\">

   <div class=\"col-sm-12\">
      <b>Pencarian Siswa</b>
      <!-- <div class=\"form-group\"> -->
      <select name=\"cari_siswa\" class=\"form-control show-tick\" data-live-search=\"true\" onchange=\"changeFunc();\" id=\"cari_siswa\">

         <option value=\"\"></option>
         {% for m in data %}
         <option value=\"{{ m.nis }}#{{ m.namasiswa }}#{{ m.kelas }}#{{ m.namaayah }}\">{{ m.nis }} - {{ m.namasiswa }} Kelas {{ m.kelas }} Bin/ti {{ m.namaayah }}</option>
         {% endfor %}

      </select>
      <div class=\"form-group\">
         <div id=\"error_box\"></div>
      </div>
      <!-- </div> -->
   </div>

   <!-- batas -->

   <div class=\"col-sm-12\">
      <!-- <b>Data Siswa</b> -->
      <div class=\"form-group\">

         <input id=\"nis\" name=\"nis\" type=\"text\" class=\"form-control\" readonly />
         <input id=\"namasiswa\" name=\"namasiswa\" type=\"text\" class=\"form-control\" readonly />
         <input id=\"kelas\" name=\"kelas\" type=\"text\" class=\"form-control\" readonly />
         <input id=\"namaayah\" name=\"namaayah\" type=\"text\" class=\"form-control\" readonly />

      </div>
   </div>

   <div class=\"col-sm-3\">
      <b>Tanggal</b>
      <div class=\"form-group\">
         <!-- <div class=\"form-line\"> -->
         <input size=\"15\" class=\"form-control\" type=\"text\" name=\"tanggalizin\" id=\"tanggalInput\" value=\"{{ \" now \" | date(\"Y-m-d \") }}\" required />
         <!-- </div> -->
      </div>
   </div>

   <div class=\"col-sm-9\">
      <b>Penjemput</b>
      <div class=\"form-group\">
         <div class=\"form-line\">
            <input name=\"penjemput\" type=\"text\" class=\"form-control\" />
         </div>
      </div>
   </div>


   <div class=\"col-sm-12\">
      <b>Catatan</b>
      <div class=\"form-group\">
         <div class=\"form-line\">
            <input name=\"catatan\" type=\"text\" class=\"form-control\" />
         </div>
      </div>
   </div>


   <div class=\"col-sm-12\">
      <div class=\"form-group\">
         <input type=\"hidden\" name=\"{{ csrf_name }}\" value=\"{{ csrf_hash }}\" style=\"display: none\">
         <button type=\"reset\" class=\"btn btn-danger waves-effect\">Batalkan Isian</button>
         <button class=\"btn btn-primary waves-effect\" type=\"submit\" id='btn-modal'>Simpan Data</button>

      </div>
   </div>
</form>


<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
   <div class=\"modal-dialog\" style=\"width:80%\">
      <div class=\"modal-content\">
         <div id=\"print-letter\">
            <div style=\"text-align: center;\">
               <img src=\"{{ base_url() }}gambar/kopnota.png\" style=\"width: 80%;\">
            </div>
            <br>
            <table width=\"100%\" class=\"table-p\">
               <tbody>
                  <tr>
                     <td></td>
                     <td class=\"width-prints\">Nama Siswa</td>
                     <td style=\"width: 1%;\">:</td>
                     <td id=\"modalnamasiswa\" width=\"30%\"></td>
                     <td width=\"15%\"></td>
                     <td style=\"width: 10%;\" class=\"width-prints\">Nama Ayah </td>
                     <td style=\"width: 1%;\">:</td>
                     <td style=\"width: 30%;\" id=\"modalnamaayah\"></td>
                  </tr>
                  <tr>
                     <td width=\"50px\"></td>
                     <td style=\"width: 10%;\">Kelas</td>
                     <td style=\"width: 1%;\">:</td>
                     <td id=\"modalkelas\"></td>
                     <td style=\"width: 20%\"></td>
                  </tr>
               </tbody>
            </table>
            <table width=\"100%\" style=\"line-height: 1px dashed #333;\">
               <tr>
                  <td style=\"width: 10em;\"></td>
                  <td>
                     <h4 style=\"text-align: center;margin: 1.10em 0;\">Surat Izin </h4>
                  </td>
                  <td style=\"text-align: right; width: 10em;\"></td>
            </table>
            <table width=\"100%\" style=\"font-size: 14px\">
               <tbody>
                  <tr>
                     <td width=\"5%\"></td>
                     <td style=\"width: 15%;\">Tanggal Izin</td>
                     <td style=\"width: 1%;\">:</td>
                     <td id=\"modaltanggalizin\" width=\"200px\"></td>
                  </tr>
                  <tr>
                     <td width=\"50px\"></td>
                     <td>Penjemput</td>
                     <td>:</td>
                     <td id=\"modalpenjemput\"></td>
                  </tr>
                  <tr>
                     <td width=\"50px\"></td>
                     <td>Catatan</td>
                     <td>:</td>
                     <td id=\"modalcatatan\"></td>
                  </tr>
               </tbody>

            </table><br>
            <div style=\"border-bottom: 1px dashed #333; text-align: center;\">

            </div>
            <br><br>

            <table width=\"100%\" style=\"font-size: 14px\">
               <tbody>
                  <tr>
                     <td width=\"5%\"></td>
                     <td style=\"width: 15%;\"></td>
                     <td style=\"width: 5%;\"></td>
                     <td></td>
                     <td width=\"25%\"></td>
                     <td id=\"modaltanggal\" style=\"width: 15%;\"></td>
                     <td style=\"width: 5%;\"></td>
                     <td></td>
                  </tr>
                  <tr>
                     <td width=\"5%\"></td>
                     <td style=\"width: 15%;\"></td>
                     <td style=\"width: 5%;\"></td>
                     <td></td>
                     <td width=\"25%\"></td>
                     <td style=\"width: 15%;\" class=\"w-print\">Yang Memberi Izin</td>
                     <td></td>
                  </tr>
                  <tr>
                     <td><br><br></td>
                  </tr>
                  <tr>
                     <td width=\"5%\"></td>
                     <td style=\"width: 15%;\"></td>
                     <td style=\"width: 5%;\"></td>
                     <td></td>
                     <td width=\"25%\"></td>
                     <td id=\"modalpengguna\" style=\"width: 15%;\"></td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class=\"modal-body\">
            <p id=\"demo\"></p>
         </div>
         <div class=\"modal-footer\">

            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            <button type=\"button\" class=\"btn btn-primary\" id=\"btn-modal-print\">Print Perizinan</button>
         </div>

      </div>

   </div>
</div>
", "perizinan/perizinanv.twig", "/home/sipy1897/public_html/demo/apliku/views/perizinan/perizinanv.twig");
    }
}
