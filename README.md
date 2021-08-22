# Multi-currency-real-time-exchange-rate-conversion

Group member:

Sunny

Andy


## Detailed design of the web application


### contentMenu
 <p class=MsoToc1 style='margin-top:11.15pt;tab-stops:right dotted 510.9pt'><!--[if supportFields]><span
 lang=EN-US><span style='mso-element:field-begin'></span>TOC \o &quot;1-2&quot;
 \h \z \u <span style='mso-element:field-separator'></span></span><![endif]--><span
 lang=EN-US><a href="#_bookmark0"><span style='color:windowtext;text-decoration:
 none;text-underline:none'>Detailed design of the<span style='letter-spacing:
 -.2pt'> </span>web<span style='letter-spacing:-.15pt'> </span>application<span
 style='mso-tab-count:1 dotted'>........................................................................................... </span>2</span></a><w:sdtPr></w:sdtPr></span></p>
 <p class=MsoToc1 style='tab-stops:right dotted 510.9pt'><span lang=EN-US><a
 href="#_bookmark1"><span style='color:windowtext;text-decoration:none;
 text-underline:none'>system<span style='letter-spacing:-.1pt'> </span>structure<span
 style='mso-tab-count:1 dotted'>........................................................................................................................... </span>5</span></a></span></p>
 <p class=MsoToc1 style='margin-top:10.95pt;tab-stops:right dotted 510.9pt'><span
 lang=EN-US><a href="#_bookmark2"><span style='color:windowtext;text-decoration:
 none;text-underline:none'>the components of the system and<span
 style='letter-spacing:-.4pt'> </span>their<span style='letter-spacing:-.05pt'>
 </span>functionalities<span style='mso-tab-count:1 dotted'>.................................................................. </span>5</span></a></span></p>
 <p class=MsoToc2 style='margin-left:3.0cm;text-indent:-14.05pt;mso-list:l0 level2 lfo3;
 tab-stops:85.1pt right dotted 510.9pt'><![if !supportLists]><span lang=EN-US
 style='font-size:10.0pt;letter-spacing:-.05pt'><span style='mso-list:Ignore'>1.1<span
 style='font:7.0pt "Times New Roman"'> </span></span></span><![endif]><span
 lang=EN-US><a href="#_bookmark3"><span style='color:windowtext;text-decoration:
 none;text-underline:none'>First page/<span style='letter-spacing:-.2pt'> </span>Welcome<span
 style='letter-spacing:-.1pt'> </span>page<span style='mso-tab-count:1 dotted'>..................................................................................................... </span>6</span></a></span></p>
 <p class=MsoToc2 style='margin-top:10.9pt;margin-right:0cm;margin-bottom:0cm;
 margin-left:87.45pt;margin-bottom:.0001pt;text-indent:-16.45pt;mso-list:l0 level2 lfo3;
 tab-stops:87.5pt right dotted 510.9pt'><![if !supportLists]><span lang=EN-US
 style='font-size:10.0pt;letter-spacing:-.05pt'><span style='mso-list:Ignore'>1.2<span
 style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
 lang=EN-US><a href="#_bookmark4"><span style='color:windowtext;text-decoration:
 none;text-underline:none'>Login<span style='letter-spacing:-.05pt'> </span>page<span
 style='mso-tab-count:1 dotted'>........................................................................................................................... </span>9</span></a></span></p>
 <p class=MsoToc2 style='margin-left:3.0cm;text-indent:-14.05pt;mso-list:l0 level2 lfo3;
 tab-stops:85.1pt right dotted 510.95pt'><![if !supportLists]><span lang=EN-US
 style='font-size:10.0pt;letter-spacing:-.05pt'><span style='mso-list:Ignore'>1.3<span
 style='font:7.0pt "Times New Roman"'> </span></span></span><![endif]><span
 lang=EN-US><a href="#_bookmark5"><span style='color:windowtext;text-decoration:
 none;text-underline:none'>User<span style='letter-spacing:-.1pt'> </span>Page<span
 style='mso-tab-count:1 dotted'>........................................................................................................................... </span>11</span></a></span></p>
 <p class=MsoToc2 style='margin-left:87.45pt;text-indent:-16.45pt;mso-list:
 l0 level2 lfo3;tab-stops:87.5pt right dotted 510.95pt'><![if !supportLists]><span
 lang=EN-US style='font-size:10.0pt;letter-spacing:-.05pt'><span
 style='mso-list:Ignore'>1.4<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
 </span></span></span><![endif]><span lang=EN-US><a href="#_bookmark6"><span
 style='color:windowtext;text-decoration:none;text-underline:none'>Option<span
 style='letter-spacing:-.15pt'> </span>Page<span style='mso-tab-count:1 dotted'>....................................................................................................................... </span>14</span></a></span></p>
 <p class=MsoToc2 style='margin-top:10.95pt;margin-right:0cm;margin-bottom:
 0cm;margin-left:87.55pt;margin-bottom:.0001pt;text-indent:-16.55pt;mso-list:
 l0 level2 lfo3;tab-stops:87.6pt right dotted 510.95pt'><![if !supportLists]><span
 lang=EN-US style='font-size:10.0pt;letter-spacing:-.05pt'><span
 style='mso-list:Ignore'>1.5<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
 </span></span></span><![endif]><span lang=EN-US><a href="#_bookmark7"><span
 style='color:windowtext;text-decoration:none;text-underline:none'>Record<span
 style='letter-spacing:-.1pt'> </span>Page<span style='mso-tab-count:1 dotted'>...................................................................................................................... </span>15</span></a></span></p>
 <p class=MsoToc1 style='tab-stops:right dotted 510.95pt'><span lang=EN-US><a
 href="#_bookmark8"><span style='color:windowtext;text-decoration:none;
 text-underline:none'>Database<span style='mso-tab-count:1 dotted'>.................................................................................................................................... </span>16</span></a></span></p>
 <p class=MsoToc1 style='margin-top:10.95pt;tab-stops:right dotted 510.95pt'><span
 lang=EN-US><a href="#_bookmark9"><span style='color:windowtext;text-decoration:
 none;text-underline:none'>programming<span style='letter-spacing:-.1pt'> </span>languages<span
 style='mso-tab-count:1 dotted'>.............................................................................................................. </span>17</span></a></span></p>
 <p class=MsoToc1 style='tab-stops:right dotted 510.95pt'><span lang=EN-US><a
 href="#_bookmark10"><span style='color:windowtext;text-decoration:none;
 text-underline:none'>tools used<span style='mso-tab-count:1 dotted'>................................................................................................................................... </span>18</span></a></span></p>
 <p class=MsoToc1 style='margin-top:10.9pt;tab-stops:right dotted 510.95pt'><span
 lang=EN-US><a href="#_bookmark11"><span style='color:windowtext;text-decoration:
 none;text-underline:none'>testing strategies<span style='letter-spacing:-.1pt'>
 </span>and<span style='letter-spacing:-.05pt'> </span>results<span
 style='mso-tab-count:1 dotted'>....................................................................................................... </span>19</span></a></span></p>
 <p class=MsoToc2 style='tab-stops:right dotted 510.95pt'><span lang=EN-US><a
 href="#_bookmark12"><span style='color:windowtext;text-decoration:none;
 text-underline:none'>welcome page<span style='mso-tab-count:1 dotted'>......................................................................................................................... </span>19</span></a></span></p>
 <p class=MsoToc2 style='margin-top:10.95pt;tab-stops:right dotted 510.95pt'><span
 lang=EN-US><a href="#_bookmark13"><span style='color:windowtext;text-decoration:
 none;text-underline:none'>In<span style='letter-spacing:-.1pt'> </span>login/register
 page<span style='mso-tab-count:1 dotted'>.............................................................................................................. </span>20</span></a></span></p>
 <p class=MsoToc1 style='tab-stops:right dotted 510.95pt'><span lang=EN-US><a
 href="#_bookmark14"><span style='color:windowtext;text-decoration:none;
 text-underline:none'>In<span style='letter-spacing:-.05pt'> </span>user<span
 style='letter-spacing:-.05pt'> </span>page<span style='mso-tab-count:1 dotted'>................................................................................................................................ </span>20</span></a></span></p>
 <p class=MsoToc2 style='margin-top:10.95pt;tab-stops:right dotted 510.95pt'><span
 lang=EN-US><a href="#_bookmark15"><span style='color:windowtext;text-decoration:
 none;text-underline:none'>In<span style='letter-spacing:-.1pt'> </span>Detail<span
 style='letter-spacing:-.1pt'> </span>Page<span style='mso-tab-count:1 dotted'>.......................................................................................................................... </span>21</span></a></span></p>
 <p class=MsoToc2 style='tab-stops:right dotted 510.95pt'><span lang=EN-US><a
 href="#_bookmark16"><span style='color:windowtext;text-decoration:none;
 text-underline:none'>In select<span style='letter-spacing:-.15pt'> </span>option<span
 style='letter-spacing:-.15pt'> </span>Page<span style='mso-tab-count:1 dotted'>............................................................................................................... </span>22</span></a></span></p>
 <p class=MsoToc2 style='margin-top:10.9pt;tab-stops:right dotted 510.95pt'><span
 lang=EN-US><a href="#_bookmark17"><span style='color:windowtext;text-decoration:
 none;text-underline:none'>In<span style='letter-spacing:-.05pt'> </span>Record<span
 style='letter-spacing:-.1pt'> </span>page,<span style='mso-tab-count:1 dotted'>....................................................................................................................... </span>22</span></a></span></p>
 <p class=MsoToc1 style='margin-top:11.1pt;tab-stops:right dotted 510.95pt'><span
 lang=EN-US><a href="#_bookmark18"><span style='color:windowtext;text-decoration:
 none;text-underline:none'>user<span style='letter-spacing:-.05pt'> </span>manual<span
 style='mso-tab-count:1 dotted'>................................................................................................................................ </span>23</span></a></span></p>
 <p class=MsoToc1 style='tab-stops:right dotted 510.95pt'><span lang=EN-US><a
 href="#_bookmark19"><span style='color:windowtext;text-decoration:none;
 text-underline:none'>installation guide for deployment<span style='letter-spacing:
 -.15pt'> </span>user<span style='letter-spacing:-.25pt'> </span>manual<span
 style='mso-tab-count:1 dotted'>............................................................................. </span>24</span></a></span></p>
 <p class=MsoToc2 style='margin-top:10.9pt;tab-stops:right dotted 510.95pt'><span
 lang=EN-US><a href="#_bookmark20"><span style='color:windowtext;text-decoration:
 none;text-underline:none'>Step 1 prepare<span style='letter-spacing:-.15pt'> </span>the<span
 style='letter-spacing:-.1pt'> </span>environment<span style='mso-tab-count:
 1 dotted'>.............................................................................................. </span>24</span></a></span></p>
 <p class=MsoToc2 style='tab-stops:right dotted 510.95pt'><span lang=EN-US><a
 href="#_bookmark21"><span style='color:windowtext;text-decoration:none;
 text-underline:none'>Step 2 set up<span style='letter-spacing:-.3pt'> </span>the<span
 style='letter-spacing:.05pt'> </span>file<span style='mso-tab-count:1 dotted'>................................................................................................................ </span>24</span></a></span></p>
 <p class=MsoToc2 style='margin-top:10.95pt;tab-stops:right dotted 510.95pt'><span
 lang=EN-US><a href="#_bookmark22"><span style='color:windowtext;text-decoration:
 none;text-underline:none'>Step 3 setup<span style='letter-spacing:-.2pt'> </span>google<span
 style='letter-spacing:.05pt'> </span>reCAPTCHA<span style='mso-tab-count:1 dotted'>............................................................................................... </span>25</span></a></span></p>
 <p class=MsoToc2 style='tab-stops:right dotted 510.95pt'><span lang=EN-US><a
 href="#_bookmark23"><span style='color:windowtext;text-decoration:none;
 text-underline:none'>Step 4 set<span style='letter-spacing:-.2pt'> </span>up<span
 style='letter-spacing:-.05pt'> </span>HTTPS<span style='mso-tab-count:1 dotted'>................................................................................................................. </span>27</span></a></span></p>
 <p class=MsoToc2 style='margin-top:10.95pt;tab-stops:right dotted 510.95pt'><span
 lang=EN-US><a href="#_bookmark24"><span style='color:windowtext;text-decoration:
 none;text-underline:none'>Step 5 set up<span style='letter-spacing:-.25pt'> </span>the<span
 style='letter-spacing:.05pt'> </span>SQL<span style='mso-tab-count:1 dotted'>............................................................................................................... </span>27</span></a></span></p>
 <p class=MsoNormal><!--[if supportFields]><span lang=EN-US><span
 style='mso-element:field-end'></span></span><![endif]--><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
</w:Sdt></div>

<span lang=EN-US style='font-size:11.0pt;font-family:"Calibri",sans-serif;
mso-fareast-font-family:Calibri;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>

<div class=WordSection3>

<h1 style='margin-top:11.35pt;line-height:normal'><a
name="Detailed_design_of_the_web_application"></a><a name="_bookmark0"></a><span
lang=EN-US>Detailed design of the web application</span></h1>

<p class=MsoBodyText style='margin-top:21.8pt;margin-right:0cm;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt'><span lang=EN-US>The interface of
the web design:</span></p>

<p class=MsoBodyText style='margin-top:.25pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="image2.png" o:spid="_x0000_s1085" type="#_x0000_t75" style='position:absolute;
  margin-left:1in;margin-top:7.75pt;width:450.05pt;height:202.95pt;z-index:251658240;
  visibility:visible;mso-wrap-style:square;mso-wrap-distance-left:0;
  mso-wrap-distance-top:0;mso-wrap-distance-right:0;mso-wrap-distance-bottom:0;
  mso-position-horizontal:absolute;mso-position-horizontal-relative:page;
  mso-position-vertical:absolute;mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image003.png" o:title=""/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=96 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=600 height=271 src="final_report.files/image004.gif" v:shapes="image2.png"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span lang=EN-US style='font-size:4.5pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>

</div>

<span lang=EN-US style='font-size:4.5pt;mso-bidi-font-size:11.0pt;font-family:
"Calibri",sans-serif;mso-fareast-font-family:Calibri;mso-ansi-language:EN-US;
mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br clear=all
style='page-break-before:always;mso-break-type:section-break'>
</span>

<div class=WordSection4>

<p class=MsoBodyText style='margin-top:1.9pt;margin-right:0cm;margin-bottom:
0cm;margin-left:59.95pt;margin-bottom:.0001pt'><!--[if gte vml 1]><v:line id="_x0000_s1051"
 style='position:absolute;left:0;text-align:left;z-index:1072;
 mso-position-horizontal-relative:page;mso-position-vertical-relative:page'
 from="72.25pt,310.55pt" to="72.25pt,689.65pt" strokeweight=".48pt">
 <w:wrap anchorx="page" anchory="page"/>
</v:line><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:1072;left:0px;margin-left:95px;margin-top:413px;width:2px;
height:507px'><img width=2 height=507 src="final_report.files/image005.gif"
v:shapes="_x0000_s1051"></span><![endif]><!--[if gte vml 1]><v:group id="_x0000_s1044"
 style='position:absolute;left:0;text-align:left;margin-left:76.3pt;
 margin-top:351.7pt;width:204.45pt;height:313.65pt;z-index:1096;
 mso-position-horizontal-relative:page;mso-position-vertical-relative:page'
 coordorigin="1526,7034" coordsize="4089,6273">
 <v:shape id="_x0000_s1050" type="#_x0000_t75" style='position:absolute;left:1553;
  top:7072;width:4039;height:6218'>
  <v:imagedata src="final_report.files/image006.jpg" o:title=""/>
 </v:shape><v:rect id="_x0000_s1049" style='position:absolute;left:1558;top:9587;
  width:4035;height:3697' filled="f" strokecolor="red" strokeweight="2.25pt"/>
 <v:rect id="_x0000_s1048" style='position:absolute;left:1755;top:9785;width:3671;
  height:2443' filled="f" strokecolor="red" strokeweight="2.25pt">
  <v:stroke dashstyle="longDash"/>
 </v:rect><v:rect id="_x0000_s1047" style='position:absolute;left:1550;top:7246;
  width:4035;height:2302' filled="f" strokecolor="#00afef" strokeweight="2.25pt"/>
 <v:rect id="_x0000_s1046" style='position:absolute;left:1549;top:7056;width:4035;
  height:186' filled="f" strokecolor="#2e5496" strokeweight="2.25pt"/>
 <v:shape id="_x0000_s1045" style='position:absolute;left:1549;top:7057;
  width:4042;height:170' coordorigin="1549,7058" coordsize="4042,170" o:spt="100"
  adj="0,,0" path="m4826,7058r765,l5591,7227r-765,l4826,7058xm1549,7059r765,l2314,7228r-765,l1549,7059xe"
  filled="f" strokecolor="#ffc000" strokeweight="2.25pt">
  <v:stroke joinstyle="round"/>
  <v:formulas/>
  <v:path arrowok="t" o:connecttype="segments"/>
 </v:shape><w:wrap anchorx="page" anchory="page"/>
</v:group><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:1096;left:0px;margin-left:101px;margin-top:468px;width:274px;
height:419px'><img width=274 height=419 src="final_report.files/image007.gif"
v:shapes="_x0000_s1044 _x0000_s1050 _x0000_s1049 _x0000_s1048 _x0000_s1047 _x0000_s1046 _x0000_s1045"></span><![endif]><!--[if gte vml 1]><v:group
 id="_x0000_s1036" style='position:absolute;left:0;text-align:left;
 margin-left:297.35pt;margin-top:310.55pt;width:226pt;height:379.1pt;z-index:1144;
 mso-position-horizontal-relative:page;mso-position-vertical-relative:page'
 coordorigin="5947,6211" coordsize="4520,7582">
 <v:shape id="_x0000_s1043" type="#_x0000_t75" style='position:absolute;left:6061;
  top:7061;width:4168;height:6225'>
  <v:imagedata src="final_report.files/image008.jpg" o:title=""/>
 </v:shape><v:rect id="_x0000_s1042" style='position:absolute;left:6081;top:9976;
  width:4130;height:3309' filled="f" strokecolor="red" strokeweight="2.25pt"/>
 <v:rect id="_x0000_s1041" style='position:absolute;left:6311;top:10259;
  width:3759;height:2920' filled="f" strokecolor="red" strokeweight="2.25pt">
  <v:stroke dashstyle="longDash"/>
 </v:rect><v:rect id="_x0000_s1040" style='position:absolute;left:6062;top:7262;
  width:4173;height:2705' filled="f" strokecolor="#00afef" strokeweight="2.25pt"/>
 <v:rect id="_x0000_s1039" style='position:absolute;left:6057;top:7056;width:4171;
  height:186' filled="f" strokecolor="#2e5496" strokeweight="2.25pt"/>
 <v:shape id="_x0000_s1038" style='position:absolute;left:6118;top:7075;
  width:4118;height:169' coordorigin="6118,7076" coordsize="4118,169" o:spt="100"
  adj="0,,0" path="m6118,7076r765,l6883,7245r-765,l6118,7076xm9471,7076r765,l10236,7245r-765,l9471,7076xe"
  filled="f" strokecolor="#ffc000" strokeweight="2.25pt">
  <v:stroke joinstyle="round"/>
  <v:formulas/>
  <v:path arrowok="t" o:connecttype="segments"/>
 </v:shape><v:shapetype id="_x0000_t202" coordsize="21600,21600" o:spt="202"
  path="m,l,21600r21600,l21600,xe">
  <v:stroke joinstyle="miter"/>
  <v:path gradientshapeok="t" o:connecttype="rect"/>
 </v:shapetype><v:shape id="_x0000_s1037" type="#_x0000_t202" style='position:absolute;
  left:5952;top:6216;width:4510;height:7572' filled="f" strokeweight=".16969mm">
  <v:textbox inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='margin-top:2.15pt;margin-right:22.75pt;
     margin-bottom:0cm;margin-left:5.15pt;margin-bottom:.0001pt;line-height:
     130%'><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;
     line-height:130%;font-family:"Arial",sans-serif;mso-hansi-font-family:
     Calibri;mso-bidi-font-family:Calibri'>This is the use show in
     table/desktop computer<o:p></o:p></span></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><w:wrap anchorx="page" anchory="page"/>
</v:group><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:1144;left:0px;margin-left:396px;margin-top:413px;width:306px;
height:511px'><img width=306 height=511 src="final_report.files/image009.gif"
v:shapes="_x0000_s1036 _x0000_s1043 _x0000_s1042 _x0000_s1041 _x0000_s1040 _x0000_s1039 _x0000_s1038 _x0000_s1037"></span><![endif]><!--[if gte vml 1]><v:shape
 id="_x0000_s1035" type="#_x0000_t202" style='position:absolute;left:0;
 text-align:left;margin-left:77.65pt;margin-top:314.15pt;width:174.65pt;
 height:12.35pt;z-index:1168;mso-position-horizontal-relative:page;
 mso-position-vertical-relative:page' filled="f" stroked="f">
 <v:textbox inset="0,0,0,0"/>
 <w:wrap anchorx="page" anchory="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:1168;left:0px;margin-left:104px;margin-top:419px;width:236px;
height:20px'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=236 height=20 style='vertical-align:top'><![endif]><![if !mso]><span
  style='position:absolute;mso-ignore:vglayout;left:0pt;z-index:1168'>
  <table cellpadding=0 cellspacing=0 width="100%">
   <tr>
    <td><![endif]>
    <div v:shape="_x0000_s1035" style='padding:0pt 0pt 0pt 0pt' class=shape>
    <p class=MsoNormal style='line-height:12.35pt;mso-line-height-rule:exactly'><span
    lang=EN-US style='font-family:"Arial",sans-serif;mso-hansi-font-family:
    Calibri;mso-bidi-font-family:Calibri'>This is the UI show in mobile phone<o:p></o:p></span></p>
    </div>
    <![if !mso]></td>
   </tr>
  </table>
  </span><![endif]><![if !mso & !vml]>&nbsp;<![endif]><![if !vml]></td>
 </tr>
</table>

</span><![endif]><span lang=EN-US>Support mobile phone/table/desktop screen
size</span></p>

<p class=MsoBodyText style='margin-top:.25pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="image5.png" o:spid="_x0000_s1084" type="#_x0000_t75" style='position:absolute;
  margin-left:1in;margin-top:7.75pt;width:242.8pt;height:183.95pt;z-index:251660288;
  visibility:visible;mso-wrap-style:square;mso-wrap-distance-left:0;
  mso-wrap-distance-top:0;mso-wrap-distance-right:0;mso-wrap-distance-bottom:0;
  mso-position-horizontal:absolute;mso-position-horizontal-relative:page;
  mso-position-vertical:absolute;mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image010.png" o:title=""/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=96 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=324 height=245 src="final_report.files/image011.jpg" v:shapes="image5.png"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span lang=EN-US style='font-size:4.5pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>

</div>

<span lang=EN-US style='font-size:4.5pt;mso-bidi-font-size:11.0pt;font-family:
"Calibri",sans-serif;mso-fareast-font-family:Calibri;mso-ansi-language:EN-US;
mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br clear=all
style='page-break-before:always;mso-break-type:section-break'>
</span>

<div class=WordSection5>

<p class=MsoBodyText style='margin-top:1.9pt;margin-right:0cm;margin-bottom:
1.7pt;margin-left:59.95pt'><span lang=EN-US>Support Dark Mode</span></p>

<table class=TableNormal border=1 cellspacing=0 cellpadding=0 style='margin-left:
 60.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;border:none;
 mso-border-alt:solid black .5pt;mso-yfti-tbllook:480;mso-padding-alt:0cm 0cm 0cm 0cm;
 mso-border-insideh:.5pt solid black;mso-border-insidev:.5pt solid black'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:17.95pt'>
  <td width=300 valign=top style='width:225.35pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:17.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>Light mode<o:p></o:p></span></p>
  </td>
  <td width=301 valign=top style='width:225.45pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:17.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>Dark mode<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:270.1pt'>
  <td width=300 valign=top style='width:225.35pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:270.1pt'>
  <p class=TableParagraph style='margin-top:.05pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  6.0pt;mso-bidi-font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.4pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image6.jpeg" o:spid="_x0000_i1069" type="#_x0000_t75" style='width:200.25pt;
   height:258pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image012.jpg" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=267 height=344
  src="final_report.files/image013.jpg" v:shapes="image6.jpeg"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>
  </td>
  <td width=301 valign=top style='width:225.45pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:270.1pt'>
  <p class=TableParagraph style='margin-top:.15pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  3.0pt;mso-bidi-font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.45pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image7.jpeg" o:spid="_x0000_i1068" type="#_x0000_t75" style='width:204pt;
   height:264.75pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image014.jpg" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=272 height=353
  src="final_report.files/image015.jpg" v:shapes="image7.jpeg"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;height:269.95pt'>
  <td width=300 valign=top style='width:225.35pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:269.95pt'>
  <p class=TableParagraph style='margin:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:4.0pt;mso-bidi-font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.4pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image8.jpeg" o:spid="_x0000_i1067" type="#_x0000_t75" style='width:201pt;
   height:261.75pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image016.jpg" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=268 height=349
  src="final_report.files/image017.jpg" v:shapes="image8.jpeg"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>
  </td>
  <td width=301 valign=top style='width:225.45pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:269.95pt'>
  <p class=TableParagraph style='margin-top:.3pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  4.0pt;mso-bidi-font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.45pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image9.jpeg" o:spid="_x0000_i1066" type="#_x0000_t75" style='width:201pt;
   height:261pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image018.jpg" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=268 height=348
  src="final_report.files/image019.jpg" v:shapes="image9.jpeg"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

</div>

<span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
"Calibri",sans-serif;mso-fareast-font-family:Calibri;mso-ansi-language:EN-US;
mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br clear=all
style='page-break-before:always;mso-break-type:section-break'>
</span>

<div class=WordSection6>

<p class=MsoBodyText style='margin-top:.6pt'><span lang=EN-US style='font-size:
9.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<h1><a name="system_structure"></a><a name="_bookmark1"></a><span lang=EN-US>system
structure</span></h1>

<p class=MsoBodyText><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
12.0pt;font-family:"Calibri Light",sans-serif;mso-hansi-font-family:Calibri;
mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
12.0pt;font-family:"Calibri Light",sans-serif;mso-hansi-font-family:Calibri;
mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
12.0pt;font-family:"Calibri Light",sans-serif;mso-hansi-font-family:Calibri;
mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:.2pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="image10.png" o:spid="_x0000_s1083" type="#_x0000_t75" style='position:absolute;
  margin-left:1in;margin-top:8.3pt;width:451.3pt;height:363pt;z-index:7;
  visibility:visible;mso-wrap-style:square;mso-wrap-distance-left:0;
  mso-wrap-distance-top:0;mso-wrap-distance-right:0;mso-wrap-distance-bottom:0;
  mso-position-horizontal:absolute;mso-position-horizontal-relative:page;
  mso-position-vertical:absolute;mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image020.gif" o:title=""/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=96 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=602 height=484 src="final_report.files/image020.gif" v:shapes="image10.png"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:12.0pt;font-family:
"Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
Calibri'><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:.3pt'><span lang=EN-US style='font-size:
36.5pt;mso-bidi-font-size:12.0pt;font-family:"Calibri Light",sans-serif;
mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<h1 style='line-height:170%'><a name="the_components_of_the_system_and_their_f"></a><a
name="_bookmark2"></a><span lang=EN-US>the components of the system and their
functionalities</span></h1>

<p class=MsoBodyText style='margin-top:0cm;margin-right:70.4pt;margin-bottom:
0cm;margin-left:59.95pt;margin-bottom:.0001pt;line-height:122%'><span
lang=EN-US>In this system There are six components, which are First page, Login
or register page, User page, Record page, option page, view detail page and
Developer information page. And We design the website can visit from different
end-device.</span></p>

</div>

<span lang=EN-US style='font-size:11.0pt;line-height:122%;font-family:"Calibri",sans-serif;
mso-fareast-font-family:Calibri;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>

<div class=WordSection7>

<p class=MsoBodyText><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:.45pt'><span lang=EN-US
style='font-size:14.5pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<h2 style='margin-left:90.3pt;text-indent:-30.3pt;mso-list:l1 level2 lfo2;
tab-stops:90.35pt'><a name="1.1First_page/_Welcome_page"></a><a
name="_bookmark3"></a><![if !supportLists]><span lang=EN-US style='font-size:
23.0pt;letter-spacing:-.05pt'><span style='mso-list:Ignore'>1.1<span
style='font:7.0pt "Times New Roman"'> </span></span></span><![endif]><span
lang=EN-US style='letter-spacing:-.2pt'>First </span><span lang=EN-US>page/ <span
style='letter-spacing:-.2pt'>Welcome</span><span style='letter-spacing:.2pt'> </span>page</span></h2>

<p class=MsoBodyText style='margin-top:.1pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="image11.jpeg" o:spid="_x0000_s1082" type="#_x0000_t75" style='position:absolute;
  margin-left:1in;margin-top:19.15pt;width:326.85pt;height:127.8pt;z-index:8;
  visibility:visible;mso-wrap-style:square;mso-wrap-distance-left:0;
  mso-wrap-distance-top:0;mso-wrap-distance-right:0;mso-wrap-distance-bottom:0;
  mso-position-horizontal:absolute;mso-position-horizontal-relative:page;
  mso-position-vertical:absolute;mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image021.jpg" o:title=""/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=96 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=436 height=170 src="final_report.files/image022.jpg" v:shapes="image11.jpeg"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span lang=EN-US style='font-size:14.0pt;mso-bidi-font-size:12.0pt;font-family:
"Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
Calibri'><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:9.6pt;margin-right:0cm;margin-bottom:
0cm;margin-left:204.0pt;margin-bottom:.0001pt'><span lang=EN-US>Picture1.1.1</span></p>

<p class=MsoBodyText style='margin-top:3.35pt;margin-right:74.55pt;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;line-height:143%;tab-stops:242.85pt 340.05pt'><!--[if gte vml 1]><v:shape
 id="image12.png" o:spid="_x0000_s1081" type="#_x0000_t75" style='position:absolute;
 left:0;text-align:left;margin-left:222.9pt;margin-top:24.1pt;width:26.1pt;
 height:23.4pt;z-index:-1879074633;visibility:visible;mso-wrap-style:square;
 mso-wrap-distance-left:0;mso-wrap-distance-top:0;mso-wrap-distance-right:0;
 mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
 mso-position-horizontal-relative:page;mso-position-vertical:absolute;
 mso-position-vertical-relative:text'>
 <v:imagedata src="final_report.files/image023.png" o:title=""/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:-1879074633;left:0px;margin-left:297px;margin-top:32px;
width:35px;height:31px'><img width=35 height=31
src="final_report.files/image024.jpg" v:shapes="image12.png"></span><![endif]><!--[if gte vml 1]><v:shape
 id="_x0000_s1080" type="#_x0000_t75" style='position:absolute;left:0;
 text-align:left;margin-left:319.95pt;margin-top:60.1pt;width:26.1pt;height:23.4pt;
 z-index:-1879074609;visibility:visible;mso-wrap-style:square;
 mso-wrap-distance-left:0;mso-wrap-distance-top:0;mso-wrap-distance-right:0;
 mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
 mso-position-horizontal-relative:page;mso-position-vertical:absolute;
 mso-position-vertical-relative:text'>
 <v:imagedata src="final_report.files/image023.png" o:title=""/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:-1879074609;left:0px;margin-left:427px;margin-top:80px;
width:35px;height:31px'><img width=35 height=31
src="final_report.files/image024.jpg" v:shapes="_x0000_s1080"></span><![endif]><span
lang=EN-US>In<span style='letter-spacing:-.1pt'> </span>Welcome<span
style='letter-spacing:-.25pt'> </span>page(Picture1.1.1),<span
style='letter-spacing:-.1pt'> </span>It<span style='letter-spacing:-.25pt'> </span><span
style='letter-spacing:-.15pt'>make</span><span style='letter-spacing:-.1pt'> </span>by<span
style='letter-spacing:-.2pt'> </span>two<span style='letter-spacing:-.2pt'> </span>part<span
style='letter-spacing:-.25pt'> </span>.First<span style='letter-spacing:-.2pt'>
</span>part<span style='letter-spacing:-.2pt'> </span>is<span style='letter-spacing:
-.15pt'> </span>title<span style='letter-spacing:-.15pt'> </span>page<span
style='letter-spacing:-.1pt'> </span>.<span style='letter-spacing:-.35pt'> </span>User<span
style='letter-spacing:-.1pt'> </span>can<span style='letter-spacing:-.2pt'> </span>direct
to other page by<span style='letter-spacing:-.6pt'> </span>click <span
style='letter-spacing:.45pt'><span style='mso-spacerun:yes'>&nbsp;</span><span
style='mso-no-proof:yes'><!--[if gte vml 1]><v:shape id="_x0000_i1065" type="#_x0000_t75"
 style='width:30pt;height:22.5pt;visibility:visible;mso-wrap-style:square'>
 <v:imagedata src="final_report.files/image025.png" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=40 height=30
src="final_report.files/image026.jpg" v:shapes="_x0000_i1065"><![endif]></span></span>/<span
style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>button.
User can click “login/register” button to<span style='letter-spacing:-1.65pt'> </span>login
or register<span style='mso-spacerun:yes'>&nbsp; </span><span style='letter-spacing:
.4pt;mso-no-proof:yes'><!--[if gte vml 1]><v:shape id="image13.png" o:spid="_x0000_i1064"
 type="#_x0000_t75" style='width:30pt;height:22.5pt;visibility:visible;
 mso-wrap-style:square'>
 <v:imagedata src="final_report.files/image025.png" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=40 height=30
src="final_report.files/image026.jpg" v:shapes="image13.png"><![endif]></span>.Or
“website<span style='letter-spacing:-.45pt'> </span>information”<span
style='letter-spacing:-.15pt'> </span>button<span style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>to
know information about<span style='letter-spacing:-.55pt'> </span>the</span></p>

<p class=MsoBodyText style='margin-left:60.0pt;text-align:justify;text-justify:
inter-ideograph;line-height:11.45pt;mso-line-height-rule:exactly'><span
lang=EN-US>website. Click To enhance to showcase in the web page We also had
added three-layer and</span></p>

<p class=MsoBodyText style='margin-top:3.35pt;margin-right:0cm;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph'><span lang=EN-US>precedence in the front cover.</span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:17.5pt;mso-bidi-font-size:
12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-left:60.0pt;text-align:justify;text-justify:
inter-ideograph'><!--[if gte vml 1]><o:wrapblock><v:shape id="image14.jpeg"
  o:spid="_x0000_s1079" type="#_x0000_t75" style='position:absolute;left:0;
  text-align:left;margin-left:1in;margin-top:17.15pt;width:323.4pt;height:124.7pt;
  z-index:9;visibility:visible;mso-wrap-style:square;mso-wrap-distance-left:0;
  mso-wrap-distance-top:0;mso-wrap-distance-right:0;mso-wrap-distance-bottom:0;
  mso-position-horizontal:absolute;mso-position-horizontal-relative:page;
  mso-position-vertical:absolute;mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image027.jpg" o:title=""/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0>
  <tr>
   <td width=96 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=431 height=166 src="final_report.files/image028.jpg" v:shapes="image14.jpeg"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span lang=EN-US>First, User would not see anything in the front cover at the
began(Picture 1.1.2):</span></p>

<p class=MsoBodyText style='margin-top:.7pt;margin-right:0cm;margin-bottom:
0cm;margin-left:156.0pt;margin-bottom:.0001pt'><span lang=EN-US>Picture1.1.2</span></p>

<p class=MsoBodyText style='margin-top:3.35pt;margin-right:0cm;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph'><span lang=EN-US>Second, <span class=GramE>The</span> front
cover would display the string (Picture 1.1.3):</span></p>

</div>

<span lang=EN-US style='font-size:11.0pt;font-family:"Calibri",sans-serif;
mso-fareast-font-family:Calibri;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>

<div class=WordSection8>

<p class=MsoBodyText style='margin-left:60.0pt'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
 id="image15.jpeg" o:spid="_x0000_i1063" type="#_x0000_t75" style='width:369pt;
 height:141pt;visibility:visible;mso-wrap-style:square'>
 <v:imagedata src="final_report.files/image029.jpg" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=492 height=188
src="final_report.files/image030.jpg" v:shapes="image15.jpeg"><![endif]></span><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-top:4.55pt;margin-right:285.9pt;
margin-bottom:0cm;margin-left:179.1pt;margin-bottom:.0001pt;text-align:center'><span
lang=EN-US>Picture 1.1.3</span></p>

<p class=MsoBodyText style='margin-top:3.35pt;margin-right:0cm;margin-bottom:
0cm;margin-left:59.95pt;margin-bottom:.0001pt'><span lang=EN-US>Third, <span
class=GramE>It</span> would display clear background picture(Picture 1.1.4):</span></p>

<p class=MsoBodyText style='margin-top:.55pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="image16.jpeg" o:spid="_x0000_s1078" type="#_x0000_t75" style='position:absolute;
  margin-left:1in;margin-top:9.85pt;width:370pt;height:143.65pt;z-index:12;
  visibility:visible;mso-wrap-style:square;mso-wrap-distance-left:0;
  mso-wrap-distance-top:0;mso-wrap-distance-right:0;mso-wrap-distance-bottom:0;
  mso-position-horizontal:absolute;mso-position-horizontal-relative:page;
  mso-position-vertical:absolute;mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image031.jpg" o:title=""/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=96 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=493 height=192 src="final_report.files/image032.jpg" v:shapes="image16.jpeg"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span lang=EN-US style='font-size:6.0pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-top:10.4pt;margin-right:285.9pt;
margin-bottom:0cm;margin-left:179.1pt;margin-bottom:.0001pt;text-align:center'><span
lang=EN-US>Picture 1.1.4</span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:.15pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="image17.png" o:spid="_x0000_s1077" type="#_x0000_t75" style='position:absolute;
  margin-left:1in;margin-top:9.45pt;width:237.5pt;height:139.25pt;z-index:13;
  visibility:visible;mso-wrap-style:square;mso-wrap-distance-left:0;
  mso-wrap-distance-top:0;mso-wrap-distance-right:0;mso-wrap-distance-bottom:0;
  mso-position-horizontal:absolute;mso-position-horizontal-relative:page;
  mso-position-vertical:absolute;mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image033.png" o:title=""/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=96 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=317 height=186 src="final_report.files/image034.jpg" v:shapes="image17.png"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span lang=EN-US style='font-size:6.0pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-top:3.05pt;margin-right:309.85pt;
margin-bottom:0cm;margin-left:152.4pt;margin-bottom:.0001pt;text-align:center'><span
lang=EN-US>Picture1.1.5</span></p>

<p class=MsoBodyText style='margin-top:3.35pt;margin-right:70.4pt;margin-bottom:
0cm;margin-left:59.95pt;margin-bottom:.0001pt;line-height:122%'><span
lang=EN-US>The second part (Picture1.1.5) in Welcome page, User can use the
bitcoin calculator in this part. The calculator can get the real-time data from
internet and output in the calculator. The page would look like
this(Picture1.1.6):</span></p>

</div>

<span lang=EN-US style='font-size:11.0pt;line-height:122%;font-family:"Calibri",sans-serif;
mso-fareast-font-family:Calibri;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>

<div class=WordSection9>

<p class=MsoBodyText style='margin-top:.45pt'><span lang=EN-US
style='font-size:11.5pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-left:129.1pt'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
 id="image18.png" o:spid="_x0000_i1062" type="#_x0000_t75" style='width:315pt;
 height:155.25pt;visibility:visible;mso-wrap-style:square'>
 <v:imagedata src="final_report.files/image035.png" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=420 height=207
src="final_report.files/image036.jpg" v:shapes="image18.png"><![endif]></span><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:2.6pt;margin-right:0cm;margin-bottom:
0cm;margin-left:179.95pt;margin-bottom:.0001pt'><span lang=EN-US>Picture1.1.6(The
case of User <span class=GramE>enter</span> 1 in USD row)</span></p>

<p class=MsoBodyText style='margin-top:.6pt'><span lang=EN-US style='font-size:
17.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:70.4pt;margin-bottom:
0cm;margin-left:59.95pt;margin-bottom:.0001pt;line-height:165%'><!--[if gte vml 1]><v:shape
 id="image19.png" o:spid="_x0000_s1076" type="#_x0000_t75" style='position:absolute;
 left:0;text-align:left;margin-left:356.3pt;margin-top:74.75pt;width:135.5pt;
 height:21.8pt;z-index:-1879074513;visibility:visible;mso-wrap-style:square;
 mso-wrap-distance-left:0;mso-wrap-distance-top:0;mso-wrap-distance-right:0;
 mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
 mso-position-horizontal-relative:page;mso-position-vertical:absolute;
 mso-position-vertical-relative:text'>
 <v:imagedata src="final_report.files/image037.png" o:title=""/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:-1879074513;left:0px;margin-left:475px;margin-top:100px;
width:181px;height:29px'><img width=181 height=29
src="final_report.files/image038.jpg" v:shapes="image19.png"></span><![endif]><span
lang=EN-US>In this part user can enter the number one of the <span
style='letter-spacing:-.15pt'>rows </span>than click the<span style='letter-spacing:
-1.65pt'> </span><span class=GramE>Red</span><span style='letter-spacing:-.15pt'>
</span>button <span style='position:relative;top:-.5pt;mso-text-raise:.5pt;
mso-no-proof:yes'><!--[if gte vml 1]><v:shape id="image20.png" o:spid="_x0000_i1061"
 type="#_x0000_t75" style='width:87pt;height:15pt;visibility:visible;
 mso-wrap-style:square'>
 <v:imagedata src="final_report.files/image039.png" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=116 height=20
src="final_report.files/image040.jpg" v:shapes="image20.png"><![endif]></span>.
That can count the dollar by your Currency <span style='letter-spacing:-.2pt'>Converter.
</span>The name of <span style='letter-spacing:-.1pt'>the </span><span
class=GramE>Red</span> button would allow the User input action, such as if
user enter value in Hong<span style='letter-spacing:-1.8pt'> </span>Kong</span></p>

<p class=MsoBodyText style='margin-top:.05pt'><span lang=EN-US
style='font-size:9.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:88.9pt;margin-bottom:
0cm;margin-left:59.95pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;line-height:131%;tab-stops:481.05pt'><span lang=EN-US>dollar ,<span
class=GramE>than</span> the button would be count according<span
style='letter-spacing:-1.6pt'> </span>to<span style='letter-spacing:-.1pt'> </span><span
style='color:red'>HKD<span style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>.
Then<span style='letter-spacing:-.2pt'> </span>user<span style='letter-spacing:
-.05pt'> </span>can click<span style='letter-spacing:-.15pt'> </span>the”<span
style='letter-spacing:-.3pt'> </span>Reset”<span style='letter-spacing:-.1pt'> </span>button<span
style='letter-spacing:-.15pt'> </span>to<span style='letter-spacing:-.15pt'> </span>reset<span
style='letter-spacing:-.15pt'> </span>all<span style='letter-spacing:-.2pt'> </span>the<span
style='letter-spacing:-.1pt'> </span>output.<span style='letter-spacing:-.1pt'>
</span>If<span style='letter-spacing:-.15pt'> </span>user<span
style='letter-spacing:-.2pt'> </span>want<span style='letter-spacing:-.25pt'> </span>to<span
style='letter-spacing:-.1pt'> </span>output<span style='letter-spacing:-.15pt'>
</span>the webpage<span style='letter-spacing:-.2pt'> </span>URL<span
style='letter-spacing:-.25pt'> </span>and<span style='letter-spacing:-.15pt'> </span>share<span
style='letter-spacing:-.4pt'> </span>to<span style='letter-spacing:-.2pt'> </span>their<span
style='letter-spacing:-.2pt'> </span>friend,<span style='letter-spacing:-.25pt'>
</span>User<span style='letter-spacing:-.3pt'> </span>can<span
style='letter-spacing:-.3pt'> </span>“Generate<span style='letter-spacing:-.2pt'>
</span><span class=SpellE>QRcode</span><span style='letter-spacing:-.25pt'> </span>to<span
style='letter-spacing:-.35pt'> </span>share<span style='letter-spacing:-.2pt'> </span>“button<span
style='letter-spacing:-.25pt'> </span>to</span></p>

<p class=MsoBodyText style='margin-left:59.95pt;line-height:13.3pt;mso-line-height-rule:
exactly'><span lang=EN-US>generate the <span class=SpellE>QRcode</span>
(Picture 1.1.7):</span></p>

<p class=MsoBodyText style='margin-top:.4pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="image21.png" o:spid="_x0000_s1075" type="#_x0000_t75" style='position:absolute;
  margin-left:228.1pt;margin-top:12.75pt;width:132.2pt;height:132.2pt;
  z-index:14;visibility:visible;mso-wrap-style:square;mso-wrap-distance-left:0;
  mso-wrap-distance-top:0;mso-wrap-distance-right:0;mso-wrap-distance-bottom:0;
  mso-position-horizontal:absolute;mso-position-horizontal-relative:page;
  mso-position-vertical:absolute;mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image041.png" o:title=""/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=304 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=176 height=176 src="final_report.files/image042.jpg" v:shapes="image21.png"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span lang=EN-US style='font-size:8.5pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:.05pt'><span lang=EN-US
style='font-size:15.5pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-left:254.95pt'><span lang=EN-US>Picture
1.1.7</span></p>

<p class=MsoBodyText style='margin-top:3.35pt;margin-right:70.4pt;margin-bottom:
0cm;margin-left:59.95pt;margin-bottom:.0001pt;line-height:122%'><span
lang=EN-US>Then If user want to scan the QR code for visit the page to get the
pass research setting. User can click the “Scan <span class=SpellE>QRcode</span>
button” and scan the <span class=SpellE>Qrcode</span> on the page. After
scanning the QR code user would direct to access the new page which they had
save the search option before.</span></p>

</div>

<span lang=EN-US style='font-size:11.0pt;line-height:122%;font-family:"Calibri",sans-serif;
mso-fareast-font-family:Calibri;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>

<div class=WordSection10>

<p class=MsoBodyText><span lang=EN-US style='font-size:4.5pt;mso-bidi-font-size:
12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-left:60.0pt'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
 id="image22.jpeg" o:spid="_x0000_i1060" type="#_x0000_t75" style='width:197.25pt;
 height:116.25pt;visibility:visible;mso-wrap-style:square'>
 <v:imagedata src="final_report.files/image043.jpg" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=263 height=155
src="final_report.files/image044.jpg" v:shapes="image22.jpeg"><![endif]></span><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:.35pt'><span lang=EN-US
style='font-size:13.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<h2 style='margin-top:.15pt;margin-right:0cm;margin-bottom:0cm;margin-left:
95.6pt;margin-bottom:.0001pt;text-indent:-35.6pt;mso-list:l1 level2 lfo2;
tab-stops:95.65pt'><a name="1.2_Login_page"></a><a name="_bookmark4"></a><![if !supportLists]><span
lang=EN-US style='font-size:23.0pt;letter-spacing:-.05pt'><span
style='mso-list:Ignore'>1.2<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=EN-US>Login<span style='letter-spacing:
-.1pt'> </span>page</span></h2>

<p class=MsoBodyText style='margin-top:.3pt'><span lang=EN-US style='font-size:
26.0pt;mso-bidi-font-size:12.0pt;font-family:"Calibri Light",sans-serif;
mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:70.4pt;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt;line-height:122%'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="image23.jpeg" o:spid="_x0000_s1074" type="#_x0000_t75" style='position:absolute;
  left:0;text-align:left;margin-left:179.8pt;margin-top:59.15pt;width:232.95pt;
  height:182.05pt;z-index:16;visibility:visible;mso-wrap-style:square;
  mso-wrap-distance-left:0;mso-wrap-distance-top:0;mso-wrap-distance-right:0;
  mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
  mso-position-horizontal-relative:page;mso-position-vertical:absolute;
  mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image045.jpg" o:title=""/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0>
  <tr>
   <td width=240 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=311 height=243 src="final_report.files/image046.jpg" v:shapes="image23.jpeg"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span lang=EN-US>If user want to login or register an account forget more
information about bitcoin. They could do the login or register action from this
page. The page would look like this (Picture1.2.1):</span></p>

<p class=MsoBodyText style='margin-top:9.35pt;margin-right:0cm;margin-bottom:
0cm;margin-left:256.3pt;margin-bottom:.0001pt'><span lang=EN-US>Picture1.2.1</span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:17.5pt;mso-bidi-font-size:
12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-left:60.0pt'><span lang=EN-US>In this page
user had to enter login id and Password for register or login.</span></p>

<p class=MsoBodyText style='margin-top:3.35pt;margin-right:70.4pt;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt;line-height:122%'><span
lang=EN-US>If user want to register an account, they need to enter the login Id
and password than click the “Create an account” button.</span></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:70.4pt;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt;line-height:122%'><span
lang=EN-US>If user want to login the account, they <span class=GramE>would</span>
need to enter the login Id and password than click the “Login” button.</span></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:70.4pt;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt;line-height:122%'><span
lang=EN-US>And every time user login or register a new account ,they need to
click the google ReCAPTCHA checkbox.</span></p>

<p class=MsoBodyText style='margin-left:60.0pt;line-height:14.6pt;mso-line-height-rule:
exactly'><span lang=EN-US>There are number of cases would happen:</span></p>

</div>

<span lang=EN-US style='font-size:11.0pt;font-family:"Calibri",sans-serif;
mso-fareast-font-family:Calibri;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>

<div class=WordSection11>

<table class=TableNormal border=1 cellspacing=0 cellpadding=0 style='margin-left:
 60.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;border:none;
 mso-border-alt:solid black .5pt;mso-yfti-tbllook:480;mso-padding-alt:0cm 0cm 0cm 0cm;
 mso-border-insideh:.5pt solid black;mso-border-insidev:.5pt solid black'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:107.95pt'>
  <td width=206 valign=top style='width:154.2pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:107.95pt'>
  <p class=TableParagraph style='line-height:122%'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:122%'>If user
  success <span class=GramE>create</span> a new account<o:p></o:p></span></p>
  </td>
  <td width=303 valign=top style='width:227.4pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:107.95pt'>
  <p class=TableParagraph style='margin-top:.4pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  4.0pt;mso-bidi-font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="_x0000_i1059" type="#_x0000_t75" style='width:209.25pt;height:60.75pt;
   visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image047.png" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=279 height=81
  src="final_report.files/image048.jpg" v:shapes="_x0000_i1059"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:3.95pt;line-height:18.0pt'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>The webpage
  would <span class=SpellE>direit</span> to user page and alert a success login
  message.<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:126.1pt'>
  <td width=206 valign=top style='width:154.2pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:126.1pt'>
  <p class=TableParagraph style='margin-top:1.75pt;line-height:122%'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:
  122%'>If user doesn’t enter the password to login or create account<o:p></o:p></span></p>
  </td>
  <td width=303 valign=top style='width:227.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:126.1pt'>
  <p class=TableParagraph style='margin-top:.15pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  3.0pt;mso-bidi-font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="_x0000_i1058" type="#_x0000_t75" style='width:217.5pt;height:64.5pt;
   visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image049.png" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=290 height=86
  src="final_report.files/image050.jpg" v:shapes="_x0000_i1058"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:5.3pt;line-height:122%'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:
  122%'>The webpage would alert a password error message.<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;height:125.95pt'>
  <td width=206 valign=top style='width:154.2pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:125.95pt'>
  <p class=TableParagraph style='margin-right:34.6pt;line-height:122%'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:
  122%'>If user doesn’t click the checkbox for google ReCAPTCHA<o:p></o:p></span></p>
  </td>
  <td width=303 valign=top style='width:227.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:125.95pt'>
  <p class=TableParagraph style='margin:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:5.5pt;mso-bidi-font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="_x0000_i1057" type="#_x0000_t75" style='width:200.25pt;height:58.5pt;
   visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image051.png" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=267 height=78
  src="final_report.files/image052.jpg" v:shapes="_x0000_i1057"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:8.0pt;line-height:122%'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:
  122%'>The webpage would alert a google ReCAPTCHA error message.<o:p></o:p></span></p>
  </td>
 </tr>
</table>

</div>

<span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:
122%;font-family:"Calibri",sans-serif;mso-fareast-font-family:Calibri;
mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br
clear=all style='page-break-before:always;mso-break-type:section-break'>
</span>

<div class=WordSection12>

<p class=MsoBodyText style='margin-top:.15pt'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<h2 style='margin-left:90.3pt;text-indent:-30.3pt;mso-list:l1 level2 lfo2;
tab-stops:90.35pt'><a name="1.3User_Page"></a><a name="_bookmark5"></a><![if !supportLists]><span
lang=EN-US style='font-size:23.0pt;letter-spacing:-.05pt'><span
style='mso-list:Ignore'>1.3<span style='font:7.0pt "Times New Roman"'> </span></span></span><![endif]><span
lang=EN-US>User<span style='letter-spacing:-.05pt'> </span><span
style='letter-spacing:-.25pt'>Page</span></span></h2>

<p class=MsoBodyText style='margin-top:.25pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="image27.png" o:spid="_x0000_s1073" type="#_x0000_t75" style='position:absolute;
  margin-left:80.65pt;margin-top:18.7pt;width:430.55pt;height:274.7pt;
  z-index:17;visibility:visible;mso-wrap-style:square;mso-wrap-distance-left:0;
  mso-wrap-distance-top:0;mso-wrap-distance-right:0;mso-wrap-distance-bottom:0;
  mso-position-horizontal:absolute;mso-position-horizontal-relative:page;
  mso-position-vertical:absolute;mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image053.png" o:title=""/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=108 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=574 height=366 src="final_report.files/image054.jpg" v:shapes="image27.png"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span lang=EN-US style='font-size:13.5pt;mso-bidi-font-size:12.0pt;font-family:
"Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
Calibri'><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:7.2pt;margin-right:0cm;margin-bottom:
0cm;margin-left:256.3pt;margin-bottom:.0001pt'><span lang=EN-US>Picture1.3.1</span></p>

<p class=MsoBodyText style='margin-top:3.35pt;margin-right:48.4pt;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt;line-height:122%'><!--[if gte vml 1]><v:shape
 id="image28.png" o:spid="_x0000_s1072" type="#_x0000_t75" style='position:absolute;
 left:0;text-align:left;margin-left:74.7pt;margin-top:43.65pt;width:93.35pt;
 height:23pt;z-index:-1879074417;visibility:visible;mso-wrap-style:square;
 mso-wrap-distance-left:0;mso-wrap-distance-top:0;mso-wrap-distance-right:0;
 mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
 mso-position-horizontal-relative:page;mso-position-vertical:absolute;
 mso-position-vertical-relative:text'>
 <v:imagedata src="final_report.files/image055.png" o:title=""/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:-1879074417;left:0px;margin-left:100px;margin-top:58px;
width:124px;height:31px'><img width=124 height=31
src="final_report.files/image056.jpg" v:shapes="image28.png"></span><![endif]><span
lang=EN-US>In this User page (Picture1.3.1), user can do the Currency Converter
with bitcoin or ETH. The table can display seven row data at the same time. And
If user clicked the “Auto Mode”</span></p>

<p class=MsoBodyText style='margin-top:.25pt'><span lang=EN-US
style='font-size:15.5pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:70.4pt;margin-bottom:
0cm;margin-left:59.95pt;margin-bottom:.0001pt;text-indent:98.0pt;line-height:
115%'><span lang=EN-US>button. User wouldn’t need to click Currency Converter <span
class=GramE>button,</span> the value would auto show in the row.</span></p>

<p class=MsoBodyText style='margin-top:1.1pt;margin-right:0cm;margin-bottom:
0cm;margin-left:59.95pt;margin-bottom:.0001pt'><!--[if gte vml 1]><v:shape
 id="image29.png" o:spid="_x0000_s1071" type="#_x0000_t75" style='position:absolute;
 left:0;text-align:left;margin-left:155.95pt;margin-top:22.3pt;width:84.85pt;
 height:18.65pt;z-index:-1879074393;visibility:visible;mso-wrap-style:square;
 mso-wrap-distance-left:0;mso-wrap-distance-top:0;mso-wrap-distance-right:0;
 mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
 mso-position-horizontal-relative:page;mso-position-vertical:absolute;
 mso-position-vertical-relative:text'>
 <v:imagedata src="final_report.files/image057.png" o:title=""/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:-1879074393;left:0px;margin-left:208px;margin-top:30px;
width:113px;height:25px'><img width=113 height=25
src="final_report.files/image058.jpg" v:shapes="image29.png"></span><![endif]><span
lang=EN-US>Then, <span class=GramE>If</span> user want to know more detail in
the Currency converter. They can click “Select</span></p>

<p class=MsoBodyText style='margin-top:.25pt'><span lang=EN-US
style='font-size:17.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:89.75pt;margin-bottom:
0cm;margin-left:59.95pt;margin-bottom:.0001pt;line-height:125%;tab-stops:237.1pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="image30.png" o:spid="_x0000_s1070" type="#_x0000_t75" style='position:absolute;
  left:0;text-align:left;margin-left:1in;margin-top:40pt;width:423.2pt;
  height:131.4pt;z-index:18;visibility:visible;mso-wrap-style:square;
  mso-wrap-distance-left:0;mso-wrap-distance-top:0;mso-wrap-distance-right:0;
  mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
  mso-position-horizontal-relative:page;mso-position-vertical:absolute;
  mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image059.png" o:title=""/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0>
  <tr>
   <td width=96 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=564 height=175 src="final_report.files/image060.jpg" v:shapes="image30.png"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span lang=EN-US>option<span style='letter-spacing:.05pt'> </span>&amp; view”<span
style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>button
to get know detail. If user doesn’t select<span style='letter-spacing:-1.65pt'>
</span>the currency the page would alter a message<span style='letter-spacing:
-.25pt'> </span>(Picture1.3.2):</span></p>

</div>

<span lang=EN-US style='font-size:11.0pt;line-height:125%;font-family:"Calibri",sans-serif;
mso-fareast-font-family:Calibri;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>

<div class=WordSection13>

<p class=MsoBodyText style='margin-top:1.9pt;margin-right:0cm;margin-bottom:
0cm;margin-left:276.0pt;margin-bottom:.0001pt'><span lang=EN-US>Picture1.3.2</span></p>

<p class=MsoBodyText style='margin-top:3.35pt;margin-right:70.4pt;margin-bottom:
0cm;margin-left:59.95pt;margin-bottom:.0001pt;line-height:122%'><span
lang=EN-US>After select the currency and click the button, user can view the
chart on top of the page(Picture1.3.3).</span></p>

<p class=MsoBodyText><!--[if gte vml 1]><o:wrapblock><v:shape id="image31.jpeg"
  o:spid="_x0000_s1069" type="#_x0000_t75" style='position:absolute;
  margin-left:86.65pt;margin-top:14.15pt;width:430.55pt;height:252pt;z-index:21;
  visibility:visible;mso-wrap-style:square;mso-wrap-distance-left:0;
  mso-wrap-distance-top:0;mso-wrap-distance-right:0;mso-wrap-distance-bottom:0;
  mso-position-horizontal:absolute;mso-position-horizontal-relative:page;
  mso-position-vertical:absolute;mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image061.jpg" o:title=""/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=116 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=574 height=336 src="final_report.files/image062.jpg" v:shapes="image31.jpeg"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:.2pt'><span lang=EN-US style='font-size:
16.5pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-left:60.0pt'><span lang=EN-US>User can view
the real-time chart on this page</span></p>

<p class=MsoBodyText style='margin-top:3.35pt;margin-right:72.45pt;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt;line-height:122%'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="image32.png" o:spid="_x0000_s1068" type="#_x0000_t75" style='position:absolute;
  left:0;text-align:left;margin-left:73.65pt;margin-top:43.2pt;width:441.35pt;
  height:129.8pt;z-index:22;visibility:visible;mso-wrap-style:square;
  mso-wrap-distance-left:0;mso-wrap-distance-top:0;mso-wrap-distance-right:0;
  mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
  mso-position-horizontal-relative:page;mso-position-vertical:absolute;
  mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image063.png" o:title=""/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0>
  <tr>
   <td width=98 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=588 height=173 src="final_report.files/image064.gif" v:shapes="image32.png"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span lang=EN-US>User also can enter the value in bottom of the table to get
the Currency converter.( Picture 3.1.4) (Picture 3.1.5).</span></p>

<p class=MsoNormal style='margin-top:8.9pt;margin-right:69.45pt;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt;text-indent:96.0pt;line-height:
122%;tab-stops:299.95pt'><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
11.0pt;line-height:122%'>(Picture3.1.4)<span style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>(Picture
3.1.5):</span><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;
line-height:122%'>user enter the number in bottom <span style='letter-spacing:
-.1pt'>row </span></span><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
11.0pt;line-height:122%'>The<span style='letter-spacing:-.35pt'> </span>top<span
style='letter-spacing:-.15pt'> </span>of<span style='letter-spacing:-.15pt'> </span>the<span
style='letter-spacing:-.3pt'> </span>page,<span style='letter-spacing:-.3pt'> </span><span
class=GramE>There</span><span style='letter-spacing:-.1pt'> </span>are<span
style='letter-spacing:-.2pt'> </span>four<span style='letter-spacing:-.3pt'> </span>button(Picture1.3.6)<span
style='letter-spacing:-.2pt'> </span>,<span style='letter-spacing:-.3pt'> </span>user<span
style='letter-spacing:-.2pt'> </span>can<span style='letter-spacing:-.25pt'> </span>click<span
style='letter-spacing:-.25pt'> </span>it<span style='letter-spacing:-.25pt'> </span>to<span
style='letter-spacing:-.2pt'> </span>access<span style='letter-spacing:-.35pt'>
</span>different webpage.<o:p></o:p></span></p>

</div>

<span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:
122%;font-family:"Calibri",sans-serif;mso-fareast-font-family:Calibri;
mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br
clear=all style='page-break-before:always;mso-break-type:section-break'>
</span>

<div class=WordSection14>

<p class=MsoBodyText style='margin-top:.2pt'><span lang=EN-US style='font-size:
2.5pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-left:60.0pt'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
 id="image33.jpeg" o:spid="_x0000_i1056" type="#_x0000_t75" style='width:213.75pt;
 height:83.25pt;visibility:visible;mso-wrap-style:square'>
 <v:imagedata src="final_report.files/image065.jpg" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=285 height=111
src="final_report.files/image065.jpg" v:shapes="image33.jpeg"><![endif]></span><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:5.4pt;margin-right:0cm;margin-bottom:
0cm;margin-left:84.0pt;margin-bottom:.0001pt'><span lang=EN-US>Picture1.3.6</span></p>

<p class=MsoBodyText style='margin-top:3.35pt;margin-right:0cm;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt'><!--[if gte vml 1]><v:shape id="image34.png"
 o:spid="_x0000_s1067" type="#_x0000_t75" style='position:absolute;left:0;
 text-align:left;margin-left:78pt;margin-top:23.35pt;width:28.45pt;height:25.15pt;
 z-index:1576;visibility:visible;mso-wrap-style:square;
 mso-wrap-distance-left:0;mso-wrap-distance-top:0;mso-wrap-distance-right:0;
 mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
 mso-position-horizontal-relative:page;mso-position-vertical:absolute;
 mso-position-vertical-relative:text'>
 <v:imagedata src="final_report.files/image066.png" o:title=""/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:1576;left:0px;margin-left:104px;margin-top:31px;width:38px;
height:34px'><img width=38 height=34 src="final_report.files/image067.jpg"
v:shapes="image34.png"></span><![endif]><span lang=EN-US>Different button would
direct user access different page, Such as</span></p>

<p class=MsoBodyText style='margin-top:.5pt'><span lang=EN-US style='font-size:
15.5pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-left:94.4pt'><span lang=EN-US>this button
would logout the account and direct user to Welcome page,</span></p>

<p class=MsoBodyText style='margin-top:6.55pt;margin-right:70.4pt;margin-bottom:
0cm;margin-left:59.95pt;margin-bottom:.0001pt;text-indent:6.0pt;line-height:
115%'><span lang=EN-US style='mso-no-proof:yes'><!--[if gte vml 1]><v:shape
 id="image35.png" o:spid="_x0000_i1055" type="#_x0000_t75" style='width:34.5pt;
 height:27pt;visibility:visible;mso-wrap-style:square'>
 <v:imagedata src="final_report.files/image068.png" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=46 height=36
src="final_report.files/image069.jpg" v:shapes="image35.png"><![endif]></span><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:12.0pt;line-height:115%;
font-family:"Times New Roman",serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
Calibri'><span style='mso-spacerun:yes'>&nbsp; </span><span style='letter-spacing:
-1.25pt'><span style='mso-spacerun:yes'>&nbsp;</span></span></span><span
lang=EN-US>this<span style='letter-spacing:-.2pt'> </span>button<span
style='letter-spacing:-.2pt'> </span>would<span style='letter-spacing:-.2pt'> </span>direct<span
style='letter-spacing:-.2pt'> </span>user<span style='letter-spacing:-.1pt'> </span>to<span
style='letter-spacing:-.2pt'> </span>option<span style='letter-spacing:-.2pt'> </span>page,<span
style='letter-spacing:-.25pt'> </span>user<span style='letter-spacing:-.1pt'> </span>can<span
style='letter-spacing:-.1pt'> </span>select<span style='letter-spacing:-.2pt'> </span>their<span
style='letter-spacing:-.15pt'> </span>style<span style='letter-spacing:-.25pt'>
</span>of<span style='letter-spacing:-.05pt'> </span>the Currency converter<span
style='letter-spacing:-.15pt'> </span>table.</span></p>

<p class=MsoBodyText style='margin-top:5.75pt;margin-right:70.4pt;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt;line-height:145%'><span
lang=EN-US style='mso-no-proof:yes'><!--[if gte vml 1]><v:shape id="image36.png"
 o:spid="_x0000_i1054" type="#_x0000_t75" style='width:22.5pt;height:21pt;
 visibility:visible;mso-wrap-style:square'>
 <v:imagedata src="final_report.files/image070.png" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=30 height=28
src="final_report.files/image071.jpg" v:shapes="image36.png"><![endif]></span><span
lang=EN-US>this<span style='letter-spacing:-.2pt'> </span>button<span
style='letter-spacing:-.2pt'> </span>would<span style='letter-spacing:-.15pt'> </span>direct<span
style='letter-spacing:-.3pt'> </span>user<span style='letter-spacing:-.25pt'> </span>to<span
style='letter-spacing:-.2pt'> </span>record<span style='letter-spacing:-.2pt'> </span>page,<span
style='letter-spacing:-.25pt'> </span>user<span style='letter-spacing:-.25pt'> </span>can<span
style='letter-spacing:-.05pt'> </span>view<span style='letter-spacing:-.2pt'> </span>the<span
style='letter-spacing:-.1pt'> </span><span style='letter-spacing:-.15pt'>record</span><span
style='letter-spacing:-.1pt'> </span>from<span style='letter-spacing:-.1pt'> </span>this<span
style='letter-spacing:-.15pt'> </span>page. <span style='position:relative;
top:-.5pt;mso-text-raise:.5pt;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
 id="image37.png" o:spid="_x0000_i1053" type="#_x0000_t75" style='width:18.75pt;
 height:21.75pt;visibility:visible;mso-wrap-style:square'>
 <v:imagedata src="final_report.files/image072.png" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=25 height=29
src="final_report.files/image073.jpg" v:shapes="image37.png"><![endif]></span></span><span
lang=EN-US style='font-family:"Times New Roman",serif;mso-hansi-font-family:
Calibri;mso-bidi-font-family:Calibri'><span
style='mso-spacerun:yes'>&nbsp;&nbsp;</span></span><span lang=EN-US>this<span
style='letter-spacing:-.25pt'> </span>button<span style='letter-spacing:-.25pt'>
</span>would<span style='letter-spacing:-.25pt'> </span>direct<span
style='letter-spacing:-.25pt'> </span>user<span style='letter-spacing:-.2pt'> </span>to<span
style='letter-spacing:-.25pt'> </span>web<span style='letter-spacing:-.25pt'> </span>information<span
style='letter-spacing:-.1pt'> </span>page,<span style='letter-spacing:-.3pt'> </span>it<span
style='letter-spacing:-.3pt'> </span>is<span style='letter-spacing:-.2pt'> </span>same<span
style='letter-spacing:-.25pt'> </span>with<span style='letter-spacing:-.1pt'> </span>Welcome<span
style='letter-spacing:-.2pt'> </span>page.</span></p>

</div>

<span lang=EN-US style='font-size:11.0pt;line-height:145%;font-family:"Calibri",sans-serif;
mso-fareast-font-family:Calibri;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>

<div class=WordSection15>

<p class=MsoBodyText><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:.45pt'><span lang=EN-US
style='font-size:14.5pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<h2 style='margin-left:95.6pt;text-indent:-35.6pt;mso-list:l1 level2 lfo2;
tab-stops:95.65pt'><a name="1.4_Option_Page"></a><a name="_bookmark6"></a><![if !supportLists]><span
lang=EN-US style='font-size:23.0pt;letter-spacing:-.05pt'><span
style='mso-list:Ignore'>1.4<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=EN-US>Option<span style='letter-spacing:
-.05pt'> </span><span style='letter-spacing:-.2pt'>Page</span></span></h2>

<p class=MsoBodyText style='margin-top:14.05pt;margin-right:0cm;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="image38.png" o:spid="_x0000_s1066" type="#_x0000_t75" style='position:absolute;
  left:0;text-align:left;margin-left:1in;margin-top:31.2pt;width:284.85pt;
  height:249.05pt;z-index:24;visibility:visible;mso-wrap-style:square;
  mso-wrap-distance-left:0;mso-wrap-distance-top:0;mso-wrap-distance-right:0;
  mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
  mso-position-horizontal-relative:page;mso-position-vertical:absolute;
  mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image074.png" o:title=""/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0>
  <tr>
   <td width=96 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=380 height=332 src="final_report.files/image075.jpg" v:shapes="image38.png"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span lang=EN-US>User in this page can verify the default option in table in
user page.</span></p>

<p class=MsoBodyText style='margin-top:2.35pt;margin-right:48.4pt;margin-bottom:
2.6pt;margin-left:59.95pt;line-height:122%'><span lang=EN-US>In this page user
can select element from right side and drag it to Your option to replace the
default elements(Picture1.4.1).</span></p>

<p class=MsoBodyText style='margin-left:60.0pt'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
 id="_x0000_i1052" type="#_x0000_t75" style='width:451.5pt;height:81.75pt;
 visibility:visible;mso-wrap-style:square'>
 <v:imagedata src="final_report.files/image076.jpg" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=602 height=109
src="final_report.files/image077.jpg" v:shapes="_x0000_i1052"><![endif]></span><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:5.75pt;margin-right:0cm;margin-bottom:
0cm;margin-left:256.3pt;margin-bottom:.0001pt'><span lang=EN-US>Picture1.4.1</span></p>

<p class=MsoBodyText style='margin-top:3.35pt;margin-right:70.4pt;margin-bottom:
0cm;margin-left:59.95pt;margin-bottom:.0001pt;line-height:122%'><span
lang=EN-US>After user custom the option setting ,user can click the “Apply
&amp; Exit “ Button to applicate the setting.</span></p>

<p class=MsoBodyText style='margin-top:.25pt'><span lang=EN-US
style='font-size:14.5pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-left:59.95pt'><span lang=EN-US>If user want
to reset option, user can click the “Reset ”Button.</span></p>

</div>

<span lang=EN-US style='font-size:11.0pt;font-family:"Calibri",sans-serif;
mso-fareast-font-family:Calibri;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>

<div class=WordSection16>

<p class=MsoBodyText style='margin-top:.15pt'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<h2 style='margin-left:95.75pt;text-indent:-35.75pt;mso-list:l1 level2 lfo2;
tab-stops:95.8pt'><a name="1.5_Record_Page"></a><a name="_bookmark7"></a><![if !supportLists]><span
lang=EN-US style='font-size:23.0pt;letter-spacing:-.05pt'><span
style='mso-list:Ignore'>1.5<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=EN-US style='letter-spacing:-.2pt'>Record</span><span
lang=EN-US style='letter-spacing:-.05pt'> </span><span lang=EN-US
style='letter-spacing:-.2pt'>Page</span></h2>

<p class=MsoBodyText style='margin-top:14.05pt;margin-right:48.4pt;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt;line-height:122%'><span
lang=EN-US>User in this page can view the research history, the table would
show display value, <span class=GramE>currency</span> and time. Value is
displaying the amount of value user searched, the currency is the type of
currency user searched, Time is when search the currency.</span></p>

<p class=MsoBodyText><!--[if gte vml 1]><o:wrapblock><v:shape id="image40.png"
  o:spid="_x0000_s1065" type="#_x0000_t75" style='position:absolute;
  margin-left:86.15pt;margin-top:16pt;width:297pt;height:231.5pt;z-index:25;
  visibility:visible;mso-wrap-style:square;mso-wrap-distance-left:0;
  mso-wrap-distance-top:0;mso-wrap-distance-right:0;mso-wrap-distance-bottom:0;
  mso-position-horizontal:absolute;mso-position-horizontal-relative:page;
  mso-position-vertical:absolute;mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image078.png" o:title=""/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=115 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=396 height=309 src="final_report.files/image079.jpg" v:shapes="image40.png"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span lang=EN-US style='font-size:11.5pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>

<p class=MsoBodyText><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:16.5pt;mso-bidi-font-size:
12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-left:60.0pt;tab-stops:255.1pt'><!--[if gte vml 1]><v:shape
 id="image41.png" o:spid="_x0000_s1064" type="#_x0000_t75" style='position:absolute;
 left:0;text-align:left;margin-left:213.75pt;margin-top:-9.2pt;width:46.65pt;
 height:19.35pt;z-index:-1879074249;visibility:visible;mso-wrap-style:square;
 mso-wrap-distance-left:0;mso-wrap-distance-top:0;mso-wrap-distance-right:0;
 mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
 mso-position-horizontal-relative:page;mso-position-vertical:absolute;
 mso-position-vertical-relative:text'>
 <v:imagedata src="final_report.files/image080.png" o:title=""/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
relative;z-index:-1879074249'><span style='left:0px;position:absolute;
left:285px;top:-12px;width:62px;height:26px'><img width=62 height=26
src="final_report.files/image081.jpg" v:shapes="image41.png"></span></span><![endif]><span
lang=EN-US>User can click<span style='letter-spacing:-.45pt'> </span>the<span
style='letter-spacing:-.15pt'> </span>“Refresh”<span style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>button
to refresh the record on the<span style='letter-spacing:-.2pt'> </span>table</span></p>

<p class=MsoBodyText style='margin-top:.1pt'><span lang=EN-US style='font-size:
17.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-left:60.0pt;tab-stops:473.25pt'><!--[if gte vml 1]><v:shape
 id="image42.png" o:spid="_x0000_s1063" type="#_x0000_t75" style='position:absolute;
 left:0;text-align:left;margin-left:416.2pt;margin-top:-7.6pt;width:68.9pt;
 height:17.45pt;z-index:-1879074225;visibility:visible;mso-wrap-style:square;
 mso-wrap-distance-left:0;mso-wrap-distance-top:0;mso-wrap-distance-right:0;
 mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
 mso-position-horizontal-relative:page;mso-position-vertical:absolute;
 mso-position-vertical-relative:text'>
 <v:imagedata src="final_report.files/image082.png" o:title=""/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
relative;z-index:-1879074225'><span style='left:0px;position:absolute;
left:555px;top:-10px;width:92px;height:23px'><img width=92 height=23
src="final_report.files/image083.jpg" v:shapes="image42.png"></span></span><![endif]><span
lang=EN-US>User also can delete all <span style='letter-spacing:-.15pt'>record </span>on
the table by click <span style='letter-spacing:-.15pt'>“cancel</span><span
style='letter-spacing:-.8pt'> </span>all<span style='letter-spacing:-.05pt'> </span>record”<span
style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>button</span></p>

</div>

<span lang=EN-US style='font-size:11.0pt;font-family:"Calibri",sans-serif;
mso-fareast-font-family:Calibri;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>

<div class=WordSection17>

<p class=MsoBodyText style='margin-top:.6pt'><span lang=EN-US style='font-size:
9.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<h1><a name=Database></a><a name="_bookmark8"></a><span lang=EN-US>Database</span></h1>

<p class=MsoBodyText style='margin-top:21.8pt;margin-right:0cm;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="image43.png" o:spid="_x0000_s1062" type="#_x0000_t75" style='position:absolute;
  left:0;text-align:left;margin-left:1in;margin-top:41.2pt;width:171pt;
  height:102pt;z-index:28;visibility:visible;mso-wrap-style:square;
  mso-wrap-distance-left:0;mso-wrap-distance-top:0;mso-wrap-distance-right:0;
  mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
  mso-position-horizontal-relative:page;mso-position-vertical:absolute;
  mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image084.png" o:title=""/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0>
  <tr>
   <td width=96 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=228 height=136 src="final_report.files/image085.jpg" v:shapes="image43.png"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span lang=EN-US>There are three tables in database,</span></p>

<p class=MsoListParagraph style='margin-top:3.15pt;margin-right:68.35pt;
margin-bottom:0cm;margin-left:84.0pt;margin-bottom:.0001pt;line-height:122%;
mso-list:l2 level1 lfo1;tab-stops:83.95pt 84.0pt'><![if !supportLists]><span
lang=EN-US style='font-size:12.0pt;line-height:122%;font-family:Wingdings;
mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings'><span
style='mso-list:Ignore'>l<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]><span class=SpellE><span lang=EN-US
style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:122%'>User_info</span></span><span
lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:122%;
letter-spacing:-.25pt'> </span><span lang=EN-US style='font-size:12.0pt;
mso-bidi-font-size:11.0pt;line-height:122%'>table<span style='letter-spacing:
-.25pt'> </span>store<span style='letter-spacing:-.3pt'> </span>user<span
style='letter-spacing:-.2pt'> </span>data,<span style='letter-spacing:-.25pt'> </span>such<span
style='letter-spacing:-.15pt'> </span>as<span style='letter-spacing:-.35pt'> </span><span
class=SpellE>login_id</span>,<span style='letter-spacing:-.35pt'> </span>password,<span
style='letter-spacing:-.2pt'> </span><span class=GramE>address</span><span
style='letter-spacing:-.25pt'> </span>and<span style='letter-spacing:-.15pt'> </span><span
class=SpellE>Unix_time</span><span style='letter-spacing:-.2pt'> </span>and <span
class=SpellE>User_No</span>.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:.2pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="image44.jpeg" o:spid="_x0000_s1061" type="#_x0000_t75" alt="一張含有 文字 的圖片  自動產生的描述"
  style='position:absolute;margin-left:98.6pt;margin-top:7.7pt;width:160.1pt;
  height:87pt;z-index:29;visibility:visible;mso-wrap-style:square;
  mso-wrap-distance-left:0;mso-wrap-distance-top:0;mso-wrap-distance-right:0;
  mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
  mso-position-horizontal-relative:page;mso-position-vertical:absolute;
  mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image086.jpg" o:title="一張含有 文字 的圖片  自動產生的描述"/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=132 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=213 height=116 src="final_report.files/image087.jpg"
   alt="一張含有 文字 的圖片  自動產生的描述" v:shapes="image44.jpeg"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span lang=EN-US style='font-size:4.5pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:.25pt'><span lang=EN-US
style='font-size:9.5pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraph style='margin-top:0cm;margin-right:73.05pt;
margin-bottom:0cm;margin-left:84.0pt;margin-bottom:.0001pt;line-height:122%;
mso-list:l2 level1 lfo1;tab-stops:83.95pt 84.0pt'><![if !supportLists]><span
lang=EN-US style='font-size:12.0pt;line-height:122%;font-family:Wingdings;
mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings'><span
style='mso-list:Ignore'>l<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]><!--[if gte vml 1]><o:wrapblock><v:shape id="image45.jpeg"
  o:spid="_x0000_s1060" type="#_x0000_t75" alt="一張含有 文字 的圖片  自動產生的描述" style='position:absolute;
  left:0;text-align:left;margin-left:97.55pt;margin-top:57.6pt;width:157.55pt;
  height:78pt;z-index:30;visibility:visible;mso-wrap-style:square;
  mso-wrap-distance-left:0;mso-wrap-distance-top:0;mso-wrap-distance-right:0;
  mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
  mso-position-horizontal-relative:page;mso-position-vertical:absolute;
  mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image088.jpg" o:title="一張含有 文字 的圖片  自動產生的描述"/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0>
  <tr>
   <td width=130 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=210 height=104 src="final_report.files/image088.jpg"
   alt="一張含有 文字 的圖片  自動產生的描述" v:shapes="image45.jpeg"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span class=SpellE><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
11.0pt;line-height:122%'>User_record</span></span><span lang=EN-US
style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:122%'> table <span
style='letter-spacing:-.15pt'>store </span>the research record, there are using
<span class=SpellE>User_No</span> connect with <span class=SpellE>User_info</span><span
style='letter-spacing:-.15pt'> </span>table<span style='letter-spacing:-.25pt'>
</span>to<span style='letter-spacing:-.25pt'> </span>record<span
style='letter-spacing:-.25pt'> </span>user<span style='letter-spacing:-.2pt'> </span>action<span
style='letter-spacing:-.1pt'> </span>when<span style='letter-spacing:-.15pt'> </span>using<span
style='letter-spacing:-.2pt'> </span>the<span style='letter-spacing:-.15pt'> </span>currency<span
style='letter-spacing:-.2pt'> converter. </span>The<span style='letter-spacing:
-.15pt'> </span>table<span style='letter-spacing:-.15pt'> are </span>store <span
class=SpellE>User_No</span>, <span class=SpellE>SearchNum</span>, currency and
time. Currency is <span style='letter-spacing:-.15pt'>store </span>currency<span
style='letter-spacing:-.75pt'> </span>type.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-top:6.95pt;margin-right:76.7pt;
margin-bottom:3.1pt;margin-left:84.0pt;line-height:122%;mso-list:l2 level1 lfo1;
tab-stops:83.95pt 84.0pt'><![if !supportLists]><span lang=EN-US
style='font-size:12.0pt;line-height:122%;font-family:Wingdings;mso-fareast-font-family:
Wingdings;mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>l<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
class=SpellE><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;
line-height:122%'>User_setting</span></span><span lang=EN-US style='font-size:
12.0pt;mso-bidi-font-size:11.0pt;line-height:122%'> table <span
style='letter-spacing:-.15pt'>store </span>the research type setting option,
there are using <span class=SpellE>User_No</span> connect<span
style='letter-spacing:-.3pt'> </span>with<span style='letter-spacing:-.15pt'> </span><span
class=SpellE>User_info</span><span style='letter-spacing:-.2pt'> </span>table<span
style='letter-spacing:-.35pt'> </span>to<span style='letter-spacing:-.3pt'> </span>record<span
style='letter-spacing:-.3pt'> </span>user<span style='letter-spacing:-.2pt'> </span>action<span
style='letter-spacing:-.15pt'> </span>when<span style='letter-spacing:-.2pt'> </span>change<span
style='letter-spacing:-.15pt'> </span>the<span style='letter-spacing:-.25pt'> </span>display<span
style='letter-spacing:-.25pt'> </span>setting<span style='letter-spacing:-.25pt'>
</span>in option page the table <span style='letter-spacing:-.15pt'>are </span>store
<span class=SpellE>User_No</span>, First, Second, Third, Fourth, Fifth, Sixth,
Seventh. These columns are saving the sequence of option<span style='letter-spacing:
-.4pt'> </span>setting.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:85.95pt'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
 id="image46.png" o:spid="_x0000_i1051" type="#_x0000_t75" alt="一張含有 文字 的圖片  自動產生的描述"
 style='width:135pt;height:116.25pt;visibility:visible;mso-wrap-style:square'>
 <v:imagedata src="final_report.files/image089.png" o:title="一張含有 文字 的圖片  自動產生的描述"/>
</v:shape><![endif]--><![if !vml]><img border=0 width=180 height=155
src="final_report.files/image090.jpg" alt="一張含有 文字 的圖片  自動產生的描述" v:shapes="image46.png"><![endif]></span><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>

</div>

<span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
"Calibri",sans-serif;mso-fareast-font-family:Calibri;mso-ansi-language:EN-US;
mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br clear=all
style='page-break-before:always;mso-break-type:section-break'>
</span>

<div class=WordSection18>

<p class=MsoBodyText style='margin-top:.6pt'><span lang=EN-US style='font-size:
9.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<h1><a name="programming_languages"></a><a name="_bookmark9"></a><span
lang=EN-US>programming languages</span></h1>

<p class=MsoBodyText><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
12.0pt;font-family:"Calibri Light",sans-serif;mso-hansi-font-family:Calibri;
mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:.6pt'><span lang=EN-US style='font-size:
6.0pt;mso-bidi-font-size:12.0pt;font-family:"Calibri Light",sans-serif;
mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<table class=TableNormal border=1 cellspacing=0 cellpadding=0 style='margin-left:
 60.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;border:none;
 mso-border-alt:solid black .5pt;mso-yfti-tbllook:480;mso-padding-alt:0cm 0cm 0cm 0cm;
 mso-border-insideh:.5pt solid black;mso-border-insidev:.5pt solid black'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:125.95pt'>
  <td width=345 valign=top style='width:258.6pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:125.95pt'>
  <p class=TableParagraph style='margin-top:.3pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  6.5pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.4pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image47.jpeg" o:spid="_x0000_i1050" type="#_x0000_t75" alt="JavaScript Interview Questions You Need To Know — Part III | by Adi S |  JavaScript in Plain English"
   style='width:246pt;height:92.25pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image091.jpg" o:title="JavaScript Interview Questions You Need To Know — Part III | by Adi S |  JavaScript in Plain English"/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=328 height=123
  src="final_report.files/image092.jpg"
  alt="JavaScript Interview Questions You Need To Know — Part III | by Adi S |  JavaScript in Plain English"
  v:shapes="image47.jpeg"><![endif]></span><span lang=EN-US style='font-size:
  10.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p></o:p></span></p>
  </td>
  <td width=256 valign=top style='width:192.25pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:125.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>JavaScript:<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:2.85pt;margin-bottom:
  0cm;margin-left:5.35pt;margin-bottom:.0001pt;line-height:18.0pt'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>Use on the
  website to handle the basic function of all <span class=GramE>website</span>
  such as generate <span class=SpellE>QRcode</span> , scan <span class=SpellE>QRcode</span>
  , count <span class=SpellE>carrency</span> , ajax change record setting and
  the setting options <span class=SpellE>funcitons</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:108.1pt'>
  <td width=345 valign=top style='width:258.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:108.1pt'>
  <p class=TableParagraph style='margin-top:.2pt;margin-right:0cm;margin-bottom:
  .05pt;margin-left:0cm'><span lang=EN-US style='font-size:6.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Calibri Light",sans-serif;mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.4pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image48.png" o:spid="_x0000_i1049" type="#_x0000_t75" style='width:248.25pt;
   height:92.25pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image093.png" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=331 height=123
  src="final_report.files/image094.jpg" v:shapes="image48.png"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p></o:p></span></p>
  </td>
  <td width=256 valign=top style='width:192.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:108.1pt'>
  <p class=TableParagraph style='margin-top:1.75pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>HTML:<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:3.35pt;margin-right:2.85pt;
  margin-bottom:0cm;margin-left:5.35pt;margin-bottom:.0001pt;line-height:122%'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:
  122%'>Provide a basic design for the website.<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:107.95pt'>
  <td width=345 valign=top style='width:258.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:107.95pt'>
  <p class=TableParagraph style='margin-top:.1pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  6.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.4pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image49.jpeg" o:spid="_x0000_i1048" type="#_x0000_t75" alt="CSS 插圖"
   style='width:246pt;height:92.25pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image095.jpg" o:title="CSS 插圖"/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=328 height=123
  src="final_report.files/image096.jpg" alt="CSS 插圖" v:shapes="image49.jpeg"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p></o:p></span></p>
  </td>
  <td width=256 valign=top style='width:192.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:107.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>CSS:<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:3.35pt;margin-right:2.85pt;
  margin-bottom:0cm;margin-left:5.35pt;margin-bottom:.0001pt;line-height:122%'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:
  122%'>Use to handle the website design style for <span class=SpellE>color,size</span>
  or the layer of the <span class=SpellE>input,button</span> object<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:107.95pt'>
  <td width=345 valign=top style='width:258.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:107.95pt'>
  <p class=TableParagraph style='margin-top:.15pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  6.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.4pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image50.jpeg" o:spid="_x0000_i1047" type="#_x0000_t75" alt="PHP 插圖"
   style='width:246pt;height:92.25pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image097.jpg" o:title="PHP 插圖"/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=328 height=123
  src="final_report.files/image098.jpg" alt="PHP 插圖" v:shapes="image50.jpeg"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p></o:p></span></p>
  </td>
  <td width=256 valign=top style='width:192.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:107.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>PHP:<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:3.35pt;margin-right:5.75pt;
  margin-bottom:0cm;margin-left:5.35pt;margin-bottom:.0001pt;text-align:justify;
  text-justify:inter-ideograph;line-height:122%'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:122%'>Use to
  handle the login, update<span style='letter-spacing:-1.1pt'> </span>data,
  delete data and handle the <span class=SpellE>api</span> more easily to<span
  style='letter-spacing:-.1pt'> </span>access<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;height:143.95pt'>
  <td width=345 valign=top style='width:258.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:143.95pt'>
  <p class=TableParagraph style='margin-top:.3pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  7.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.4pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image51.png" o:spid="_x0000_i1046" type="#_x0000_t75" style='width:245.25pt;
   height:126.75pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image099.png" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=327 height=169
  src="final_report.files/image100.gif" v:shapes="image51.png"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p></o:p></span></p>
  </td>
  <td width=256 valign=top style='width:192.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:143.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>MYSQL:<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:3.35pt;line-height:122%'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:
  122%'>Provide a SQL server to save all <span class=SpellE>usering</span>
  info, <span class=GramE>record</span> and the settings,<o:p></o:p></span></p>
  </td>
 </tr>
</table>

</div>

<span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:
122%;font-family:"Calibri",sans-serif;mso-fareast-font-family:Calibri;
mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br
clear=all style='page-break-before:always;mso-break-type:section-break'>
</span>

<div class=WordSection19>

<p class=MsoBodyText style='margin-top:.6pt'><span lang=EN-US style='font-size:
9.0pt;mso-bidi-font-size:12.0pt;font-family:"Calibri Light",sans-serif;
mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<h1><a name="tools_used"></a><a name="_bookmark10"></a><span lang=EN-US>tools
used</span></h1>

<p class=MsoBodyText><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
12.0pt;font-family:"Calibri Light",sans-serif;mso-hansi-font-family:Calibri;
mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:.6pt'><span lang=EN-US style='font-size:
6.0pt;mso-bidi-font-size:12.0pt;font-family:"Calibri Light",sans-serif;
mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<table class=TableNormal border=1 cellspacing=0 cellpadding=0 style='margin-left:
 60.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;border:none;
 mso-border-alt:solid black .5pt;mso-yfti-tbllook:480;mso-padding-alt:0cm 0cm 0cm 0cm;
 mso-border-insideh:.5pt solid black;mso-border-insidev:.5pt solid black'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:17.95pt'>
  <td width=601 valign=top style='width:450.85pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:17.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>Website tools<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:72.1pt'>
  <td width=601 valign=top style='width:450.85pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:72.1pt'>
  <p class=TableParagraph style='margin-top:1.75pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>qrcode.js<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:3.35pt;margin-right:2.95pt;
  margin-bottom:0cm;margin-left:5.35pt;margin-bottom:.0001pt;line-height:122%'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:
  122%'>Used to generate the QR code for the website for the user scan it and
  access to the website or the record conveniently<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;line-height:14.6pt;mso-line-height-rule:
  exactly'><span lang=EN-US><a href="https://davidshimjs.github.io/qrcodejs/"><span
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt;color:#0562C1'>https://davidshimjs.github.io/qrcodejs/</span></a></span><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:53.95pt'>
  <td width=601 valign=top style='width:450.85pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:53.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>currency-<span class=SpellE>api</span><o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:161.9pt;
  margin-bottom:0cm;margin-left:5.35pt;margin-bottom:.0001pt;line-height:18.0pt'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>Used to get the
  currency list and the price of the currency </span><span lang=EN-US><a
  href="https://github.com/fawazahmed0/currency-api"><span style='font-size:
  12.0pt;mso-bidi-font-size:11.0pt;color:#0562C1'>https://github.com/fawazahmed0/currency-api</span></a></span><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:53.95pt'>
  <td width=601 valign=top style='width:450.85pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:53.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>google ReCAPTCHA<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;line-height:18.0pt'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>Used to
  authenticate the user login or create account is not a bot. </span><span
  lang=EN-US><a href="https://www.google.com/recaptcha/about/"><span
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt;color:#0562C1'>https://www.google.com/recaptcha/about/</span></a></span><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:53.95pt'>
  <td width=601 valign=top style='width:450.85pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:53.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>QR code scanner<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:161.9pt;
  margin-bottom:0cm;margin-left:5.35pt;margin-bottom:.0001pt;line-height:18.0pt'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>Scan the <span
  class=SpellE>QRcode</span> from the camera </span><span lang=EN-US><a
  href="https://github.com/jbialobr/JsQRScanner"><span style='font-size:12.0pt;
  mso-bidi-font-size:11.0pt;color:#0562C1'>https://github.com/jbialobr/JsQRScanner</span></a></span><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:53.95pt'>
  <td width=601 valign=top style='width:450.85pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:53.95pt'>
  <p class=TableParagraph><span class=SpellE><span lang=EN-US style='font-size:
  12.0pt;mso-bidi-font-size:11.0pt'>TradingView</span></span><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'> Mini Chart Widget<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:198.3pt;
  margin-bottom:0cm;margin-left:5.35pt;margin-bottom:.0001pt;line-height:18.0pt'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>To generate the
  Chart for the website </span><span lang=EN-US><a
  href="https://www.tradingview.com/widget/mini-chart/"><span style='font-size:
  12.0pt;mso-bidi-font-size:11.0pt;color:#0562C1'>https://www.tradingview.com/widget/mini-chart/</span></a></span><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;mso-yfti-lastrow:yes;height:72.1pt'>
  <td width=601 valign=top style='width:450.85pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:72.1pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>HTML + CSS<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:3.35pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>Website template<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:3.35pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>A design for the website<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:3.35pt'><span lang=EN-US><a
  href="https://www.bypeople.com/industrious-business-html5-responsive-template/"><span
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt;color:#0562C1'>https://www.bypeople.com/industrious-business-html5-responsive-template/</span></a></span><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoBodyText style='margin-top:.25pt;margin-right:0cm;margin-bottom:
.05pt;margin-left:0cm'><span lang=EN-US style='font-size:14.5pt;mso-bidi-font-size:
12.0pt;font-family:"Calibri Light",sans-serif;mso-hansi-font-family:Calibri;
mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<table class=TableNormal border=1 cellspacing=0 cellpadding=0 style='margin-left:
 60.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;border:none;
 mso-border-alt:solid black .5pt;mso-yfti-tbllook:480;mso-padding-alt:0cm 0cm 0cm 0cm;
 mso-border-insideh:.5pt solid black;mso-border-insidev:.5pt solid black'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:17.95pt'>
  <td width=553 valign=top style='width:414.85pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:17.95pt'>
  <p class=TableParagraph style='margin-top:2.15pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Arial",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'>Develop tools:<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:35.95pt'>
  <td width=553 valign=top style='width:414.85pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:35.95pt'>
  <p class=TableParagraph style='margin-top:2.15pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Arial",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'>Chrome(Developer
  Tools)<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:4.2pt'><span lang=EN-US><a
  href="https://www.google.com/intl/zh-HK/chrome/"><span style='font-size:12.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Arial",sans-serif;mso-hansi-font-family:
  Calibri;mso-bidi-font-family:Calibri;color:#0562C1'>https://www.google.com/intl/zh-HK/chrome/</span></a></span><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Arial",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:35.95pt'>
  <td width=553 valign=top style='width:414.85pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:35.95pt'>
  <p class=TableParagraph style='margin-top:2.15pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Arial",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'>phpMyAdmin<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:4.2pt'><span lang=EN-US><a
  href="https://www.phpmyadmin.net/"><span style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Arial",sans-serif;mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:#0562C1'>https://www.phpmyadmin.net/</span></a></span><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Arial",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:35.95pt'>
  <td width=553 valign=top style='width:414.85pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:35.95pt'>
  <p class=TableParagraph style='margin-top:2.15pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Arial",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'>Adobe Brackets (+
  beautify extenuation)<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:4.2pt'><span lang=EN-US><a
  href="http://brackets.io/"><span style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Arial",sans-serif;mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:#0562C1'>http://brackets.io/</span></a></span><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Arial",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;height:36.05pt'>
  <td width=553 valign=top style='width:414.85pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:36.05pt'>
  <p class=TableParagraph style='margin-top:2.15pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Arial",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'>Beautify
  Extenuation(Formatting php, html, JavaScript, CSS)<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:4.2pt'><span lang=EN-US><a
  href="https://github.com/brackets-beautify/brackets-beautify"><span
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Arial",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:#0562C1'>https://github.com/brackets-beautify/brackets-beautify</span></a></span><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Arial",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

</div>

<span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Arial",sans-serif;mso-fareast-font-family:Calibri;mso-hansi-font-family:Calibri;
mso-bidi-font-family:Calibri;mso-ansi-language:EN-US;mso-fareast-language:EN-US;
mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>

<div class=WordSection20>

<p class=MsoBodyText><!--[if gte vml 1]><v:shape id="image52.png" o:spid="_x0000_s1059"
 type="#_x0000_t75" style='position:absolute;margin-left:207.8pt;margin-top:671pt;
 width:86.25pt;height:42pt;z-index:-1879074129;visibility:visible;
 mso-wrap-style:square;mso-wrap-distance-left:0;mso-wrap-distance-top:0;
 mso-wrap-distance-right:0;mso-wrap-distance-bottom:0;
 mso-position-horizontal:absolute;mso-position-horizontal-relative:page;
 mso-position-vertical:absolute;mso-position-vertical-relative:page'>
 <v:imagedata src="final_report.files/image101.gif" o:title=""/>
 <w:wrap anchorx="page" anchory="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:-1879074129;margin-left:277px;margin-top:895px;width:115px;
height:56px'><img width=115 height=56 src="final_report.files/image101.gif"
v:shapes="image52.png"></span><![endif]><span lang=EN-US style='font-size:10.0pt;
mso-bidi-font-size:12.0pt;font-family:"Calibri Light",sans-serif;mso-hansi-font-family:
Calibri;mso-bidi-font-family:Calibri'><o:p></o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
12.0pt;font-family:"Calibri Light",sans-serif;mso-hansi-font-family:Calibri;
mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:.1pt'><span lang=EN-US style='font-size:
11.5pt;mso-bidi-font-size:12.0pt;font-family:"Calibri Light",sans-serif;
mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<h1 style='line-height:31.55pt;mso-line-height-rule:exactly'><a
name="testing_strategies_and_results"></a><a name="_bookmark11"></a><span
lang=EN-US>testing strategies and results</span></h1>

<p class=MsoBodyText style='margin-top:21.8pt;margin-right:70.4pt;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt;line-height:122%'><span
lang=EN-US>the testing strategies and results would include welcome page
,login/register page ,user page, modify option page ,detail page and record
page</span></p>

<h2 style='margin-top:10.6pt'><a name="welcome_page"></a><a name="_bookmark12"></a><span
lang=EN-US>welcome page</span></h2>

<p class=MsoBodyText style='margin-top:.15pt;margin-right:0cm;margin-bottom:
.05pt;margin-left:0cm'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
12.0pt;font-family:"Calibri Light",sans-serif;mso-hansi-font-family:Calibri;
mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<table class=TableNormal border=1 cellspacing=0 cellpadding=0 style='margin-left:
 60.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;border:none;
 mso-border-alt:solid black .5pt;mso-yfti-tbllook:480;mso-padding-alt:0cm 0cm 0cm 0cm;
 mso-border-insideh:.5pt solid black;mso-border-insidev:.5pt solid black'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:17.95pt'>
  <td width=330 valign=top style='width:247.8pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:17.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>Use case/action<o:p></o:p></span></p>
  </td>
  <td width=271 valign=top style='width:203.05pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:17.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>output<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:72.1pt'>
  <td width=330 valign=top style='width:247.8pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:72.1pt'>
  <p class=TableParagraph style='margin-top:1.75pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>If user enter the value in
  USD row<o:p></o:p></span></p>
  </td>
  <td width=271 valign=top style='width:203.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:72.1pt'>
  <p class=TableParagraph style='margin-top:1.75pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>The red button would
  change to<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:.3pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  8.5pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:11.75pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image53.png" o:spid="_x0000_i1045" type="#_x0000_t75" style='width:155.25pt;
   height:30pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image102.png" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=207 height=40
  src="final_report.files/image103.jpg" v:shapes="image53.png"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:.5pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  11.5pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:71.95pt'>
  <td width=330 valign=top style='width:247.8pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:71.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>If user enter the value in EUR row<o:p></o:p></span></p>
  </td>
  <td width=271 valign=top style='width:203.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:71.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>The red button would change to<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:.25pt;margin-right:0cm;margin-bottom:
  .05pt;margin-left:0cm'><span lang=EN-US style='font-size:7.5pt;mso-bidi-font-size:
  11.0pt;font-family:"Calibri Light",sans-serif;mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:9.15pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image54.png" o:spid="_x0000_i1044" type="#_x0000_t75" style='width:183.75pt;
   height:36pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image104.png" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=245 height=48
  src="final_report.files/image105.jpg" v:shapes="image54.png"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:.5pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  8.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:71.95pt'>
  <td width=330 valign=top style='width:247.8pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:71.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>If user enter the value in JPY row<o:p></o:p></span></p>
  </td>
  <td width=271 valign=top style='width:203.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:71.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>The red button would change to<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:.25pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  7.5pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:6.7pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image55.png" o:spid="_x0000_i1043" type="#_x0000_t75" style='width:188.25pt;
   height:37.5pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image106.png" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=251 height=50
  src="final_report.files/image107.jpg" v:shapes="image55.png"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:.5pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  7.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:71.95pt'>
  <td width=330 valign=top style='width:247.8pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:71.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>If user enter the value in HKD row<o:p></o:p></span></p>
  </td>
  <td width=271 valign=top style='width:203.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:71.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>The red button would change to<o:p></o:p></span></p>
  <p class=TableParagraph style='margin:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:7.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:7.35pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image56.png" o:spid="_x0000_i1042" type="#_x0000_t75" style='width:192.75pt;
   height:37.5pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image108.png" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=257 height=50
  src="final_report.files/image109.jpg" v:shapes="image56.png"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:.3pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  7.5pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:71.95pt'>
  <td width=330 valign=top style='width:247.8pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:71.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>If user enter the value in CNY row<o:p></o:p></span></p>
  </td>
  <td width=271 valign=top style='width:203.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:71.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>The red button would change to<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:.25pt;margin-right:0cm;margin-bottom:
  .05pt;margin-left:0cm'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Calibri Light",sans-serif;mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:6.7pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image57.png" o:spid="_x0000_i1041" type="#_x0000_t75" style='width:190.5pt;
   height:37.5pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image110.png" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=254 height=50
  src="final_report.files/image111.jpg" v:shapes="image57.png"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:71.95pt'>
  <td width=330 valign=top style='width:247.8pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:71.95pt'>
  <p class=TableParagraph style='margin:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:8.3pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>If user click reset button<o:p></o:p></span></p>
  </td>
  <td width=271 valign=top style='width:203.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:71.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>Reset all the input in the table<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;mso-yfti-lastrow:yes;height:36.05pt'>
  <td width=330 valign=top style='width:247.8pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:36.05pt'>
  <p class=TableParagraph style='margin-top:1.75pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>If user click generate <span
  class=SpellE>QRcode</span> to share button<o:p></o:p></span></p>
  </td>
  <td width=271 valign=top style='width:203.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:36.05pt'>
  <p class=TableParagraph style='margin-top:1.75pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>QR would save the search
  value and<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:3.35pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>make it to be QR code.<o:p></o:p></span></p>
  </td>
 </tr>
</table>

</div>

<span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Calibri",sans-serif;mso-fareast-font-family:Calibri;mso-ansi-language:EN-US;
mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br clear=all
style='page-break-before:always;mso-break-type:section-break'>
</span>

<div class=WordSection21>

<p class=MsoBodyText style='margin-left:59.95pt'><!--[if mso & !supportInlineShapes & supportFields]><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:"Calibri Light",sans-serif;
mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><span
style='mso-element:field-begin;mso-field-lock:yes'></span><span
style='mso-spacerun:yes'>&nbsp;</span>SHAPE <span
style='mso-spacerun:yes'>&nbsp;</span>\* MERGEFORMAT <span style='mso-element:
field-separator'></span></span><![endif]--><span lang=EN-US style='font-size:
10.0pt;mso-bidi-font-size:12.0pt;font-family:"Calibri Light",sans-serif;
mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><!--[if gte vml 1]><v:group
 id="_x0000_s1026" style='width:451.35pt;height:55.1pt;
 mso-position-horizontal-relative:char;mso-position-vertical-relative:line'
 coordsize="9027,1102">
 <v:line id="_x0000_s1034" style='position:absolute' from="10,5" to="4956,5"
  strokeweight=".48pt"/>
 <v:line id="_x0000_s1033" style='position:absolute' from="4966,5" to="9017,5"
  strokeweight=".48pt"/>
 <v:line id="_x0000_s1032" style='position:absolute' from="5,0" to="5,1102"
  strokeweight=".48pt"/>
 <v:line id="_x0000_s1031" style='position:absolute' from="10,1097" to="4956,1097"
  strokeweight=".48pt"/>
 <v:line id="_x0000_s1030" style='position:absolute' from="4961,0" to="4961,1102"
  strokeweight=".16969mm"/>
 <v:line id="_x0000_s1029" style='position:absolute' from="4966,1097" to="9017,1097"
  strokeweight=".48pt"/>
 <v:line id="_x0000_s1028" style='position:absolute' from="9022,0" to="9022,1102"
  strokeweight=".16969mm"/>
 <v:shape id="_x0000_s1027" type="#_x0000_t75" style='position:absolute;left:187;
  top:115;width:4664;height:855'>
  <v:imagedata src="final_report.files/image112.png" o:title=""/>
 </v:shape><w:anchorlock/>
</v:group><![endif]--><![if !vml]><img width=603 height=76
src="final_report.files/image113.gif" v:shapes="_x0000_s1026 _x0000_s1034 _x0000_s1033 _x0000_s1032 _x0000_s1031 _x0000_s1030 _x0000_s1029 _x0000_s1028 _x0000_s1027"><![endif]></span><!--[if mso & !supportInlineShapes & supportFields]><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:"Calibri Light",sans-serif;
mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><v:shape id="_x0000_i1025"
 type="#_x0000_t75" style='width:631.85pt;height:77.1pt'>
 <v:imagedata croptop="-65520f" cropbottom="65520f"/>
</v:shape><span style='mso-element:field-end'></span></span><![endif]--><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:"Calibri Light",sans-serif;
mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:.15pt'><span lang=EN-US
style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Calibri Light",sans-serif;
mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<h2><a name="In_login/register_page"></a><a name="_bookmark13"></a><span
lang=EN-US>In login/register<span style='letter-spacing:-1.2pt'> </span>page</span></h2>

<p class=MsoBodyText style='margin-top:14.05pt;margin-right:0cm;margin-bottom:
1.7pt;margin-left:60.0pt'><span lang=EN-US>There are number of cases would<span
style='letter-spacing:-1.2pt'> </span>happen:</span></p>

<table class=TableNormal border=1 cellspacing=0 cellpadding=0 style='margin-left:
 60.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;border:none;
 mso-border-alt:solid black .5pt;mso-yfti-tbllook:480;mso-padding-alt:0cm 0cm 0cm 0cm;
 mso-border-insideh:.5pt solid black;mso-border-insidev:.5pt solid black'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:17.95pt'>
  <td width=274 valign=top style='width:205.3pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:17.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>Use case/action<o:p></o:p></span></p>
  </td>
  <td width=331 valign=top style='width:248.0pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:17.95pt'>
  <p class=TableParagraph style='margin-left:5.4pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>output<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:107.95pt'>
  <td width=274 valign=top style='width:205.3pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:107.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>If user success <span class=GramE>create</span> a new account<o:p></o:p></span></p>
  </td>
  <td width=331 valign=top style='width:248.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:107.95pt'>
  <p class=TableParagraph style='margin-top:.35pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  4.0pt;mso-bidi-font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.4pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image24.png" o:spid="_x0000_i1040" type="#_x0000_t75" style='width:209.25pt;
   height:60.75pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image047.png" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=279 height=81
  src="final_report.files/image114.jpg" v:shapes="image24.png"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:4.0pt;margin-right:.5pt;margin-bottom:
  0cm;margin-left:5.4pt;margin-bottom:.0001pt;line-height:18.0pt'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>The webpage
  would <span class=SpellE>direit</span> to user page and alert a success login
  message.<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:125.95pt'>
  <td width=274 valign=top style='width:205.3pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:125.95pt'>
  <p class=TableParagraph style='line-height:122%'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:122%'>If user
  does not enter the password to login or create account<o:p></o:p></span></p>
  </td>
  <td width=331 valign=top style='width:248.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:125.95pt'>
  <p class=TableParagraph style='margin-top:.05pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  3.0pt;mso-bidi-font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.4pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image25.png" o:spid="_x0000_i1039" type="#_x0000_t75" style='width:217.5pt;
   height:64.5pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image049.png" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=290 height=86
  src="final_report.files/image115.jpg" v:shapes="image25.png"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:5.25pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.4pt;margin-bottom:.0001pt;line-height:122%'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:
  122%'>The webpage would alert a password error message.<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;height:125.95pt'>
  <td width=274 valign=top style='width:205.3pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:125.95pt'>
  <p class=TableParagraph style='line-height:122%'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:122%'>If user
  does not click the checkbox for google ReCAPTCHA<o:p></o:p></span></p>
  </td>
  <td width=331 valign=top style='width:248.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:125.95pt'>
  <p class=TableParagraph style='margin-top:.05pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  5.5pt;mso-bidi-font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.4pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image26.png" o:spid="_x0000_i1038" type="#_x0000_t75" style='width:200.25pt;
   height:58.5pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image051.png" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=267 height=78
  src="final_report.files/image116.jpg" v:shapes="image26.png"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:7.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.4pt;margin-bottom:.0001pt;line-height:122%'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:
  122%'>The webpage would alert a google ReCAPTCHA error message.<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoBodyText><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<h1 style='margin-top:8.8pt;line-height:normal'><a name="In_user_page"></a><a
name="_bookmark14"></a><span lang=EN-US>In user page</span></h1>

<p class=MsoBodyText><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
12.0pt;font-family:"Calibri Light",sans-serif;mso-hansi-font-family:Calibri;
mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:6.5pt;mso-bidi-font-size:
12.0pt;font-family:"Calibri Light",sans-serif;mso-hansi-font-family:Calibri;
mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<table class=TableNormal border=1 cellspacing=0 cellpadding=0 style='margin-left:
 60.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;border:none;
 mso-border-alt:solid black .5pt;mso-yfti-tbllook:480;mso-padding-alt:0cm 0cm 0cm 0cm;
 mso-border-insideh:.5pt solid black;mso-border-insidev:.5pt solid black'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:18.05pt'>
  <td width=286 valign=top style='width:214.8pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:18.05pt'>
  <p class=TableParagraph style='margin-top:1.75pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>Use case/action<o:p></o:p></span></p>
  </td>
  <td width=315 valign=top style='width:236.05pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:18.05pt'>
  <p class=TableParagraph style='margin-top:1.75pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>output<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;height:17.95pt'>
  <td width=286 valign=top style='width:214.8pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:17.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>If user enter the value in BTC row<o:p></o:p></span></p>
  </td>
  <td width=315 valign=top style='width:236.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:17.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>The red button would change to<o:p></o:p></span></p>
  </td>
 </tr>
</table>

</div>

<span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Calibri",sans-serif;mso-fareast-font-family:Calibri;mso-ansi-language:EN-US;
mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br clear=all
style='page-break-before:always;mso-break-type:section-break'>
</span>

<div class=WordSection22>

<table class=TableNormal border=1 cellspacing=0 cellpadding=0 style='margin-left:
 60.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;border:none;
 mso-border-alt:solid black .5pt;mso-yfti-tbllook:480;mso-padding-alt:0cm 0cm 0cm 0cm;
 mso-border-insideh:.5pt solid black;mso-border-insidev:.5pt solid black'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:53.95pt'>
  <td width=286 valign=top style='width:214.8pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:53.95pt'>
  <p class=TableParagraph style='margin:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman",serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=315 valign=top style='width:236.05pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:53.95pt'>
  <p class=TableParagraph style='margin-top:.25pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  3.5pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:7.65pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image59.png" o:spid="_x0000_i1037" type="#_x0000_t75" style='width:218.25pt;
   height:42pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image117.gif" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=291 height=56
  src="final_report.files/image117.gif" v:shapes="image59.png"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:72.1pt'>
  <td width=286 valign=top style='width:214.8pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:72.1pt'>
  <p class=TableParagraph style='margin-top:1.75pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>If user enter the value in
  ETH row<o:p></o:p></span></p>
  </td>
  <td width=315 valign=top style='width:236.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:72.1pt'>
  <p class=TableParagraph style='margin-top:1.75pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>The red button would
  change to<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:.05pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  5.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.4pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image60.png" o:spid="_x0000_i1036" type="#_x0000_t75" style='width:217.5pt;
   height:42pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image118.gif" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=290 height=56
  src="final_report.files/image118.gif" v:shapes="image60.png"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:89.95pt'>
  <td width=286 valign=top style='width:214.8pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:89.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>If use clicked the Auto mode<o:p></o:p></span></p>
  <p class=TableParagraph style='margin:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:.3pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  12.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:33.15pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image28.png" o:spid="_x0000_i1035" type="#_x0000_t75" style='width:103.5pt;
   height:25.5pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image055.png" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=138 height=34
  src="final_report.files/image119.gif" v:shapes="image28.png"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p></o:p></span></p>
  <p class=TableParagraph style='margin:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=315 valign=top style='width:236.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:89.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>The row of formula would calculate<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:125.95pt'>
  <td width=286 valign=top style='width:214.8pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:125.95pt'>
  <p class=TableParagraph style='line-height:122%'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:122%'>If user
  want to know more detail of the currency, they can select and click one of
  the choose on the table and click Select option &amp; view button<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:.3pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  8.5pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.4pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image61.png" o:spid="_x0000_i1034" type="#_x0000_t75" style='width:135.75pt;
   height:30pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image120.png" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=181 height=40
  src="final_report.files/image121.jpg" v:shapes="image61.png"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:.1pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  9.5pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=315 valign=top style='width:236.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:125.95pt'>
  <p class=TableParagraph style='line-height:122%'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:122%'>User can
  view the chart and column table in detail page.<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;height:89.95pt'>
  <td width=286 valign=top style='width:214.8pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:89.95pt'>
  <p class=TableParagraph style='margin-right:31.45pt;line-height:122%'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:
  122%'>If user click the Select option &amp; view button, but does not select
  the row choose<o:p></o:p></span></p>
  </td>
  <td width=315 valign=top style='width:236.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:89.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>The webpage would show the alert to user.<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:.3pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  12.5pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:6.65pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image62.png" o:spid="_x0000_i1033" type="#_x0000_t75" style='width:219pt;
   height:48.75pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image122.png" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=292 height=65
  src="final_report.files/image123.jpg" v:shapes="image62.png"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:.15pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  7.5pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoBodyText><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
12.0pt;font-family:"Calibri Light",sans-serif;mso-hansi-font-family:Calibri;
mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:.45pt'><span lang=EN-US
style='font-size:14.5pt;mso-bidi-font-size:12.0pt;font-family:"Calibri Light",sans-serif;
mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<h2><a name="In_Detail_Page"></a><a name="_bookmark15"></a><span lang=EN-US>In
Detail Page</span></h2>

<p class=MsoBodyText style='margin-top:.15pt'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:"Calibri Light",sans-serif;
mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<table class=TableNormal border=1 cellspacing=0 cellpadding=0 style='margin-left:
 60.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;border:none;
 mso-border-alt:solid black .5pt;mso-yfti-tbllook:480;mso-padding-alt:0cm 0cm 0cm 0cm;
 mso-border-insideh:.5pt solid black;mso-border-insidev:.5pt solid black'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:17.95pt'>
  <td width=347 valign=top style='width:260.5pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:17.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>Use case/action<o:p></o:p></span></p>
  </td>
  <td width=254 valign=top style='width:190.3pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:17.95pt'>
  <p class=TableParagraph style='margin-left:5.4pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>output<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;height:126.05pt'>
  <td width=347 valign=top style='width:260.5pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:126.05pt'>
  <p class=TableParagraph style='margin-top:1.75pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>User can insert the value
  in row<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:.5pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  4.5pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:-1.45pt;
  margin-bottom:0cm;margin-left:11.65pt;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri;mso-no-proof:yes'><!--[if gte vml 1]><v:shape id="image63.png"
   o:spid="_x0000_i1032" type="#_x0000_t75" style='width:247.5pt;height:59.25pt;
   visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image124.png" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=330 height=79
  src="final_report.files/image125.jpg" v:shapes="image63.png"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p></o:p></span></p>
  <p class=TableParagraph style='margin:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=254 valign=top style='width:190.3pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:126.05pt'>
  <p class=TableParagraph style='margin-top:1.75pt;margin-right:5.2pt;
  margin-bottom:0cm;margin-left:5.4pt;margin-bottom:.0001pt;line-height:122%'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:
  122%'>User can know the different Currency price.<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:-5.8pt;margin-bottom:
  0cm;margin-left:7.6pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image64.png" o:spid="_x0000_i1031" type="#_x0000_t75" style='width:185.25pt;
   height:79.5pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image126.png" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=247 height=106
  src="final_report.files/image127.jpg" v:shapes="image64.png"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

</div>

<span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
"Calibri Light",sans-serif;mso-fareast-font-family:Calibri;mso-hansi-font-family:
Calibri;mso-bidi-font-family:Calibri;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>

<div class=WordSection23>

<p class=MsoBodyText style='margin-top:.15pt'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:"Calibri Light",sans-serif;
mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<h2><a name="In_select_option_Page"></a><a name="_bookmark16"></a><span
lang=EN-US>In select option Page</span></h2>

<p class=MsoBodyText style='margin-top:.15pt'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:"Calibri Light",sans-serif;
mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<table class=TableNormal border=1 cellspacing=0 cellpadding=0 style='margin-left:
 60.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;border:none;
 mso-border-alt:solid black .5pt;mso-yfti-tbllook:480;mso-padding-alt:0cm 0cm 0cm 0cm;
 mso-border-insideh:.5pt solid black;mso-border-insidev:.5pt solid black'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:17.95pt'>
  <td width=300 valign=top style='width:225.35pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:17.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>Use case/action<o:p></o:p></span></p>
  </td>
  <td width=301 valign=top style='width:225.45pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:17.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>output<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:72.1pt'>
  <td width=300 valign=top style='width:225.35pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:72.1pt'>
  <p class=TableParagraph style='margin-top:1.75pt;line-height:122%'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:
  122%'>user can select element from right side and drag it to replace the
  default elements<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.4pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image39.jpeg" o:spid="_x0000_i1030" type="#_x0000_t75" style='width:174.75pt;
   height:31.5pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image076.jpg" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=233 height=42
  src="final_report.files/image128.jpg" v:shapes="image39.jpeg"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p></o:p></span></p>
  </td>
  <td width=301 valign=top style='width:225.45pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:72.1pt'>
  <p class=TableParagraph style='margin-top:1.75pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>The default option would <span
  class=GramE>changed</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:71.95pt'>
  <td width=300 valign=top style='width:225.35pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:71.95pt'>
  <p class=TableParagraph style='margin-right:2.9pt;line-height:122%'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:
  122%'>user custom the option setting ,user can click the “Apply &amp; Exit “
  Button to applicate the setting.<o:p></o:p></span></p>
  </td>
  <td width=301 valign=top style='width:225.45pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:71.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>The setting would upload to database<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;height:35.95pt'>
  <td width=300 valign=top style='width:225.35pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:35.95pt'>
  <p class=TableParagraph style='margin-top:.1pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  15.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>Click reset button<o:p></o:p></span></p>
  </td>
  <td width=301 valign=top style='width:225.45pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:35.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>reset the current setting to be default<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:3.35pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>setting<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoBodyText style='margin-top:.4pt'><span lang=EN-US style='font-size:
24.5pt;mso-bidi-font-size:12.0pt;font-family:"Calibri Light",sans-serif;
mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<h2 style='margin-top:0cm'><!--[if gte vml 1]><v:shape id="image65.png" o:spid="_x0000_s1058"
 type="#_x0000_t75" style='position:absolute;left:0;text-align:left;
 margin-left:169.9pt;margin-top:-59.35pt;width:40.3pt;height:18.25pt;z-index:-1879074081;
 visibility:visible;mso-wrap-style:square;mso-wrap-distance-left:0;
 mso-wrap-distance-top:0;mso-wrap-distance-right:0;mso-wrap-distance-bottom:0;
 mso-position-horizontal:absolute;mso-position-horizontal-relative:page;
 mso-position-vertical:absolute;mso-position-vertical-relative:text'>
 <v:imagedata src="final_report.files/image129.png" o:title=""/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
relative;z-index:-1879074081'><span style='left:0px;position:absolute;
left:226px;top:-79px;width:54px;height:24px'><img width=54 height=24
src="final_report.files/image130.jpg" v:shapes="image65.png"></span></span><![endif]><a
name="In_Record_page,"></a><a name="_bookmark17"></a><span lang=EN-US>In Record
page,</span></h2>

<p class=MsoBodyText style='margin-top:.15pt'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:"Calibri Light",sans-serif;
mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<table class=TableNormal border=1 cellspacing=0 cellpadding=0 style='margin-left:
 60.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;border:none;
 mso-border-alt:solid black .5pt;mso-yfti-tbllook:480;mso-padding-alt:0cm 0cm 0cm 0cm;
 mso-border-insideh:.5pt solid black;mso-border-insidev:.5pt solid black'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:17.95pt'>
  <td width=300 valign=top style='width:225.35pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:17.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>Use case/action<o:p></o:p></span></p>
  </td>
  <td width=301 valign=top style='width:225.45pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:17.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>output<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:107.95pt'>
  <td width=300 valign=top style='width:225.35pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:107.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>User in this page would see<o:p></o:p></span></p>
  </td>
  <td width=301 valign=top style='width:225.45pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:107.95pt'>
  <p class=TableParagraph style='margin-top:.1pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  11.5pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:8.05pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image66.png" o:spid="_x0000_i1029" type="#_x0000_t75" style='width:198pt;
   height:87.75pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image131.png" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=264 height=117
  src="final_report.files/image132.jpg" v:shapes="image66.png"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:54.05pt'>
  <td width=300 valign=top style='width:225.35pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:54.05pt'>
  <p class=TableParagraph style='margin-top:.25pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
  6.5pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:112.05pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image67.png" o:spid="_x0000_i1028" type="#_x0000_t75" style='width:93.75pt;
   height:35.25pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image133.gif" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=125 height=47
  src="final_report.files/image133.gif" v:shapes="image67.png"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;line-height:9.95pt;mso-line-height-rule:
  exactly'><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>Click
  refresh button<o:p></o:p></span></p>
  </td>
  <td width=301 valign=top style='width:225.45pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:54.05pt'>
  <p class=TableParagraph style='margin-top:1.75pt;line-height:122%'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:
  122%'>the page of data would update from database<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;height:71.95pt'>
  <td width=300 valign=top style='width:225.35pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:71.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>Click the cancel all record button<o:p></o:p></span></p>
  <p class=TableParagraph style='margin-top:.2pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><span lang=EN-US style='font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:8.4pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:"Calibri Light",sans-serif;
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
   id="image68.png" o:spid="_x0000_i1027" type="#_x0000_t75" style='width:159.75pt;
   height:35.25pt;visibility:visible;mso-wrap-style:square'>
   <v:imagedata src="final_report.files/image134.gif" o:title=""/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=213 height=47
  src="final_report.files/image134.gif" v:shapes="image68.png"><![endif]></span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Calibri Light",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri'><o:p></o:p></span></p>
  </td>
  <td width=301 valign=top style='width:225.45pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:71.95pt'>
  <p class=TableParagraph style='text-indent:6.0pt;line-height:122%'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:
  122%'>The record data would delete from database<o:p></o:p></span></p>
  </td>
 </tr>
</table>

</div>

<span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:
122%;font-family:"Calibri",sans-serif;mso-fareast-font-family:Calibri;
mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br
clear=all style='page-break-before:always;mso-break-type:section-break'>
</span>

<div class=WordSection24>

<p class=MsoBodyText style='margin-top:.6pt'><span lang=EN-US style='font-size:
9.0pt;mso-bidi-font-size:12.0pt;font-family:"Calibri Light",sans-serif;
mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<h1><a name="user_manual"></a><a name="_bookmark18"></a><span lang=EN-US>user
manual</span></h1>

<p class=MsoBodyText style='margin-top:21.8pt;margin-right:0cm;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt'><span lang=EN-US>User can view
different currency in the table.</span></p>

<p class=MsoBodyText style='margin-top:3.35pt;margin-right:0cm;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt'><span lang=EN-US>In Welcome page
user can view the country currency convent.</span></p>

<p class=MsoBodyText style='margin-top:3.35pt;margin-right:70.4pt;margin-bottom:
0cm;margin-left:59.95pt;margin-bottom:.0001pt;line-height:122%'><span
lang=EN-US>After user login the page, they can view virtual currency and view
the chart in the page. Then, there are few conditions for setup the website,
such as:</span></p>

<p class=MsoListParagraph style='margin-top:0cm;line-height:14.6pt;mso-line-height-rule:
exactly;mso-list:l2 level1 lfo1;tab-stops:83.95pt 84.0pt'><![if !supportLists]><span
lang=EN-US style='font-size:12.0pt;font-family:Wingdings;mso-fareast-font-family:
Wingdings;mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>l<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>Set up <span
style='letter-spacing:-.2pt'>LAMP/WAMP</span><span style='letter-spacing:.05pt'>
</span>server<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:3.35pt;margin-right:71.75pt;margin-bottom:
0cm;margin-left:83.95pt;margin-bottom:.0001pt;line-height:122%'><span
lang=EN-US>LAMP(Linux, Apache, MySQL, PHP)/ WAMP(Windows, Apache, MySQL, PHP)
that used to handle the website for http, SQL storge and the PHP functions.</span></p>

<p class=MsoListParagraph style='margin-top:0cm;line-height:14.6pt;mso-line-height-rule:
exactly;mso-list:l2 level1 lfo1;tab-stops:83.95pt 84.0pt'><![if !supportLists]><span
lang=EN-US style='font-size:12.0pt;font-family:Wingdings;mso-fareast-font-family:
Wingdings;mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>l<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>Setup<span
style='letter-spacing:.05pt'> </span>HTTPS<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:3.35pt;margin-right:0cm;margin-bottom:
0cm;margin-left:83.95pt;margin-bottom:.0001pt'><span lang=EN-US>For the webcam,
the bowser only allows the website to access the webcam with HTTPS.</span></p>

<p class=MsoListParagraph style='margin-top:3.35pt;mso-list:l2 level1 lfo1;
tab-stops:83.95pt 84.0pt'><![if !supportLists]><span lang=EN-US
style='font-size:12.0pt;font-family:Wingdings;mso-fareast-font-family:Wingdings;
mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>l<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>Devices should
have a camera if want to scan OR<span style='letter-spacing:-.1pt'> </span>code<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-top:3.35pt;mso-list:l2 level1 lfo1;
tab-stops:83.95pt 84.0pt'><![if !supportLists]><span lang=EN-US
style='font-size:12.0pt;font-family:Wingdings;mso-fareast-font-family:Wingdings;
mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>l<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>Prepare google
reCAPTCHA V2<span style='letter-spacing:-.05pt'> </span><span style='letter-spacing:
-.2pt'>key</span><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:3.35pt;margin-right:0cm;margin-bottom:
0cm;margin-left:83.95pt;margin-bottom:.0001pt'><span lang=EN-US>Used to
authenticate the login is not bot.</span></p>

<p class=MsoBodyText style='margin-top:.3pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="image69.png" o:spid="_x0000_s1057" type="#_x0000_t75" alt="Diagram, schematic  Description automatically generated"
  style='position:absolute;margin-left:1in;margin-top:9pt;width:231.25pt;
  height:182.65pt;z-index:34;visibility:visible;mso-wrap-style:square;
  mso-wrap-distance-left:0;mso-wrap-distance-top:0;mso-wrap-distance-right:0;
  mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
  mso-position-horizontal-relative:page;mso-position-vertical:absolute;
  mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image135.png" o:title="Diagram, schematic  Description automatically generated"/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=96 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=308 height=244 src="final_report.files/image136.jpg"
   alt="Diagram, schematic  Description automatically generated" v:shapes="image69.png"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span lang=EN-US style='font-size:5.5pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:8.25pt;margin-right:0cm;margin-bottom:
1.7pt;margin-left:59.95pt'><span lang=EN-US>Group work</span></p>

<table class=TableNormal border=1 cellspacing=0 cellpadding=0 style='margin-left:
 60.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;border:none;
 mso-border-alt:solid black .5pt;mso-yfti-tbllook:480;mso-padding-alt:0cm 0cm 0cm 0cm;
 mso-border-insideh:.5pt solid black;mso-border-insidev:.5pt solid black'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:17.95pt'>
  <td width=214 valign=top style='width:160.55pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:17.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>member<o:p></o:p></span></p>
  </td>
  <td width=315 valign=top style='width:236.15pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:17.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt'>the role each member played in the group<o:p></o:p></span></p>
  </td>
  <td width=72 valign=top style='width:54.1pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:17.95pt'>
  <p class=TableParagraph style='margin-left:5.25pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>percent<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:36.1pt'>
  <td width=214 valign=top style='width:160.55pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:36.1pt'>
  <p class=TableParagraph style='margin-top:1.75pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>Chan Kwan Kit<o:p></o:p></span></p>
  </td>
  <td width=315 valign=top style='width:236.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:36.1pt'>
  <p class=TableParagraph style='margin-top:.2pt;margin-right:27.5pt;
  margin-bottom:0cm;margin-left:5.35pt;margin-bottom:.0001pt;line-height:18.0pt;
  mso-line-height-rule:exactly'><span lang=EN-US style='font-size:15.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Arial",sans-serif;mso-hansi-font-family:
  Calibri;mso-bidi-font-family:Calibri;color:#444444'>front-end side , <span
  class=SpellE>api</span> and the <span class=SpellE>sql</span> data <span
  class=SpellE>managment</span></span><span lang=EN-US style='font-size:15.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Arial",sans-serif;mso-hansi-font-family:
  Calibri;mso-bidi-font-family:Calibri'><o:p></o:p></span></p>
  </td>
  <td width=72 valign=top style='width:54.1pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:36.1pt'>
  <p class=TableParagraph style='margin-top:1.75pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.25pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>55%<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;height:53.85pt'>
  <td width=214 valign=top style='width:160.55pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:53.85pt'>
  <p class=TableParagraph style='margin-top:1.55pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>Ma Kam <span class=SpellE>Wa</span><o:p></o:p></span></p>
  </td>
  <td width=315 valign=top style='width:236.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:53.85pt'>
  <p class=TableParagraph style='margin-top:0cm;line-height:18.0pt;mso-line-height-rule:
  exactly'><span lang=EN-US style='font-size:15.0pt;mso-bidi-font-size:11.0pt;
  font-family:"Arial",sans-serif;mso-hansi-font-family:Calibri;mso-bidi-font-family:
  Calibri;color:#444444'>handle back-end side, part of function and website
  error debugging</span><span lang=EN-US style='font-size:15.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Arial",sans-serif;mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri'><o:p></o:p></span></p>
  </td>
  <td width=72 valign=top style='width:54.1pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:53.85pt'>
  <p class=TableParagraph style='margin-top:1.55pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.25pt;margin-bottom:.0001pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>45%<o:p></o:p></span></p>
  </td>
 </tr>
</table>

</div>

<span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Calibri",sans-serif;mso-fareast-font-family:Calibri;mso-ansi-language:EN-US;
mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br clear=all
style='page-break-before:always;mso-break-type:section-break'>
</span>

<div class=WordSection25>

<p class=MsoBodyText style='margin-top:.6pt'><span lang=EN-US style='font-size:
9.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<h1 style='margin-right:70.4pt;line-height:170%'><a
name="installation_guide_for_deployment_user_m"></a><a name="_bookmark19"></a><span
lang=EN-US>installation guide for deployment user manual</span></h1>

<h2 style='margin-top:10.05pt'><a name="Step_1_prepare_the_environment:"></a><a
name="_bookmark20"></a><span lang=EN-US>Step 1 prepare the environment:</span></h2>

<p class=MsoBodyText style='margin-top:14.05pt;margin-right:174.95pt;
margin-bottom:0cm;margin-left:60.0pt;margin-bottom:.0001pt;line-height:122%'><span
lang=EN-US>Need to prepare Apache , MySQL, and PHP server on your computer. If
you use windows use can install their software:</span></p>

<p class=MsoBodyText style='margin-top:.25pt'><span lang=EN-US
style='font-size:14.5pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:224.45pt;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt;line-height:122%'><span
lang=EN-US>XAMPP Installers and Downloads for Apache Friends <a
href="https://www.apachefriends.org/download.html"><span style='color:#0562C1'>https://www.apachefriends.org/download.html</span></a><span
style='color:#0562C1'> </span>WampServer <a
href="https://sourceforge.net/projects/wampserver/"><span style='color:#0562C1'>https://sourceforge.net/projects/wampserver/</span></a></span></p>

<p class=MsoBodyText style='margin-top:.1pt'><span lang=EN-US style='font-size:
12.5pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:2.55pt;margin-right:0cm;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt'><span lang=EN-US>Linux (Ubuntu
use this statement) in the terminal:</span></p>

<p class=MsoBodyText style='margin-top:3.35pt;margin-right:356.45pt;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt;line-height:122%'><span
class=SpellE><span lang=EN-US>sudo</span></span><span lang=EN-US> apt-get
install apache2 <span class=SpellE>sudo</span> apt-get install <span
class=SpellE>mysql</span>-server</span></p>

<p class=MsoBodyText style='margin-left:60.0pt;line-height:14.6pt;mso-line-height-rule:
exactly'><span class=SpellE><span lang=EN-US>sudo</span></span><span
lang=EN-US> apt-get install php libapache2-mod-php php-<span class=SpellE>mysql</span></span></p>

<p class=MsoBodyText><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:.3pt'><span lang=EN-US style='font-size:
14.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<h2 style='margin-top:0cm'><a name="Step_2_set_up_the_file"></a><a
name="_bookmark21"></a><span lang=EN-US>Step 2 set up the file</span></h2>

<p class=MsoBodyText style='margin-top:14.05pt;margin-right:0cm;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt'><span lang=EN-US>Copy the file in
the <span class=SpellE>apache</span> “www” file</span></p>

<p class=MsoBodyText style='margin-top:3.35pt;margin-right:70.4pt;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt;line-height:122%'><span
lang=EN-US>On windows by default on “c:\<span class=SpellE>wamp</span>\www” and
“c:\XAMPP\www” or other location your set.</span></p>

<p class=MsoBodyText style='margin-left:60.0pt;line-height:14.6pt;mso-line-height-rule:
exactly'><span lang=EN-US>On Linux the location on “var/www/html”</span></p>

</div>

<span lang=EN-US style='font-size:11.0pt;font-family:"Calibri",sans-serif;
mso-fareast-font-family:Calibri;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>

<div class=WordSection26>

<p class=MsoBodyText style='margin-top:.15pt'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<h2><a name="Step_3_setup_google_reCAPTCHA"></a><a name="_bookmark22"></a><span
lang=EN-US>Step 3 setup google reCAPTCHA</span></h2>

<p class=MsoBodyText style='margin-top:14.05pt;margin-right:280.7pt;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt;line-height:122%'><span
lang=EN-US>Prepare google reCAPTCHA and Https services Go to this link</span></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:280.7pt;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt;line-height:122%'><span
lang=EN-US>Google reCAPTCHA <a href="https://www.google.com/recaptcha/about/"><span
style='color:#0562C1'>https://www.google.com/recaptcha/about/</span></a><span
style='color:#0562C1'> </span>Click this button</span></p>

<p class=MsoBodyText style='margin-top:.4pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="image70.png" o:spid="_x0000_s1056" type="#_x0000_t75" alt="一張含有 文字 的圖片  自動產生的描述"
  style='position:absolute;margin-left:1in;margin-top:17.05pt;width:345.2pt;
  height:107.65pt;z-index:35;visibility:visible;mso-wrap-style:square;
  mso-wrap-distance-left:0;mso-wrap-distance-top:0;mso-wrap-distance-right:0;
  mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
  mso-position-horizontal-relative:page;mso-position-vertical:absolute;
  mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image137.png" o:title="一張含有 文字 的圖片  自動產生的描述"/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=96 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=460 height=144 src="final_report.files/image138.gif"
   alt="一張含有 文字 的圖片  自動產生的描述" v:shapes="image70.png"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
</p>

<p class=MsoBodyText style='margin-left:60.0pt'><span lang=EN-US>Click this
button to create new</span></p>

<p class=MsoBodyText style='margin-top:.1pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="image71.png" o:spid="_x0000_s1055" type="#_x0000_t75" style='position:absolute;
  margin-left:1in;margin-top:7pt;width:47.25pt;height:42.75pt;z-index:36;
  visibility:visible;mso-wrap-style:square;mso-wrap-distance-left:0;
  mso-wrap-distance-top:0;mso-wrap-distance-right:0;mso-wrap-distance-bottom:0;
  mso-position-horizontal:absolute;mso-position-horizontal-relative:page;
  mso-position-vertical:absolute;mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image139.gif" o:title=""/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=96 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=63 height=57 src="final_report.files/image139.gif" v:shapes="image71.png"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span lang=EN-US style='font-size:4.0pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:6.15pt;margin-right:0cm;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt'><span lang=EN-US>Enter all option</span></p>

<p class=MsoBodyText style='margin-top:.4pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="image72.jpeg" o:spid="_x0000_s1054" type="#_x0000_t75" alt="一張含有 文字 的圖片  自動產生的描述"
  style='position:absolute;margin-left:1in;margin-top:9.7pt;width:446.25pt;
  height:268.25pt;z-index:37;visibility:visible;mso-wrap-style:square;
  mso-wrap-distance-left:0;mso-wrap-distance-top:0;mso-wrap-distance-right:0;
  mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
  mso-position-horizontal-relative:page;mso-position-vertical:absolute;
  mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image140.jpg" o:title="一張含有 文字 的圖片  自動產生的描述"/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=96 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=595 height=358 src="final_report.files/image141.jpg"
   alt="一張含有 文字 的圖片  自動產生的描述" v:shapes="image72.jpeg"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span lang=EN-US style='font-size:6.0pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>

</div>

<span lang=EN-US style='font-size:6.0pt;mso-bidi-font-size:11.0pt;font-family:
"Calibri",sans-serif;mso-fareast-font-family:Calibri;mso-ansi-language:EN-US;
mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br clear=all
style='page-break-before:always;mso-break-type:section-break'>
</span>

<div class=WordSection27>

<p class=MsoBodyText style='margin-top:.35pt'><span lang=EN-US
style='font-size:9.5pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-left:99.05pt'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
 id="image73.jpeg" o:spid="_x0000_i1026" type="#_x0000_t75" alt="一張含有 文字 的圖片  自動產生的描述"
 style='width:359.25pt;height:198pt;visibility:visible;mso-wrap-style:square'>
 <v:imagedata src="final_report.files/image142.jpg" o:title="一張含有 文字 的圖片  自動產生的描述"/>
</v:shape><![endif]--><![if !vml]><img border=0 width=479 height=264
src="final_report.files/image143.jpg" alt="一張含有 文字 的圖片  自動產生的描述" v:shapes="image73.jpeg"><![endif]></span><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:.2pt'><span lang=EN-US style='font-size:
4.5pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:2.6pt;margin-right:0cm;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt'><span lang=EN-US>And click apply</span></p>

<p class=MsoBodyText style='margin-top:3.35pt;margin-right:0cm;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt'><span lang=EN-US>Then you can
have the key for the website</span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:.15pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="image74.jpeg" o:spid="_x0000_s1053" type="#_x0000_t75" alt="一張含有 文字 的圖片  自動產生的描述"
  style='position:absolute;margin-left:84.4pt;margin-top:10.65pt;width:321.9pt;
  height:190.45pt;z-index:38;visibility:visible;mso-wrap-style:square;
  mso-wrap-distance-left:0;mso-wrap-distance-top:0;mso-wrap-distance-right:0;
  mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
  mso-position-horizontal-relative:page;mso-position-vertical:absolute;
  mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image144.jpg" o:title="一張含有 文字 的圖片  自動產生的描述"/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=113 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=429 height=254 src="final_report.files/image145.jpg"
   alt="一張含有 文字 的圖片  自動產生的描述" v:shapes="image74.jpeg"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span lang=EN-US style='font-size:7.0pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>

<p class=MsoBodyText><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:.3pt'><span lang=EN-US style='font-size:
9.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:0cm;margin-bottom:1.7pt;
margin-left:60.0pt'><span lang=EN-US>Copy the HTML key(top one) on the</span></p>

<table class=TableNormal border=1 cellspacing=0 cellpadding=0 style='margin-left:
 60.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;border:none;
 mso-border-alt:solid black .5pt;mso-yfti-tbllook:480;mso-padding-alt:0cm 0cm 0cm 0cm;
 mso-border-insideh:.5pt solid black;mso-border-insidev:.5pt solid black'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
  height:18.1pt'>
  <td width=170 valign=top style='width:127.3pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:18.1pt'>
  <p class=TableParagraph><span class=SpellE><span lang=EN-US style='font-size:
  12.0pt;mso-bidi-font-size:11.0pt'>Login_User.php</span></span><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt'> Line 53<o:p></o:p></span></p>
  </td>
  <td width=510 valign=top style='width:382.8pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:18.1pt'>
  <p class=TableParagraph style='margin-left:5.4pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>&lt;div class=&quot;g-<span
  class=SpellE>recaptcha</span>&quot; id=&quot;g-<span class=SpellE>recaptcha</span>&quot;
  data-<span class=SpellE>sitekey</span>=&quot;<span style='color:black;
  mso-color-alt:windowtext;background:red'>&lt;here&gt;</span>&quot;&gt;&lt;/div&gt;<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoBodyText style='margin-top:.1pt'><span lang=EN-US style='font-size:
16.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:0cm;margin-bottom:1.7pt;
margin-left:60.0pt'><span lang=EN-US>Copy the Connection key(Button one) on the</span></p>

<table class=TableNormal border=1 cellspacing=0 cellpadding=0 style='margin-left:
 60.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;border:none;
 mso-border-alt:solid black .5pt;mso-yfti-tbllook:480;mso-padding-alt:0cm 0cm 0cm 0cm;
 mso-border-insideh:.5pt solid black;mso-border-insidev:.5pt solid black'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
  height:17.95pt'>
  <td width=274 valign=top style='width:205.3pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:17.95pt'>
  <p class=TableParagraph><span class=SpellE><span lang=EN-US style='font-size:
  12.0pt;mso-bidi-font-size:11.0pt'>phpFunction</span></span><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>/<span class=SpellE>loginSubmit.php</span>
  Line 30<o:p></o:p></span></p>
  </td>
  <td width=406 valign=top style='width:304.8pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:17.95pt'>
  <p class=TableParagraph style='margin-left:5.4pt'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt'>$<span class=SpellE>secret_key</span>
  = '<span style='color:black;mso-color-alt:windowtext;background:red'>&lt;here&gt;</span>';<o:p></o:p></span></p>
  </td>
 </tr>
</table>

</div>

<span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Calibri",sans-serif;mso-fareast-font-family:Calibri;mso-ansi-language:EN-US;
mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br clear=all
style='page-break-before:always;mso-break-type:section-break'>
</span>

<div class=WordSection28>

<p class=MsoBodyText style='margin-top:.15pt'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<h2><a name="Step_4_set_up_HTTPS"></a><a name="_bookmark23"></a><span
lang=EN-US>Step 4 set up HTTPS</span></h2>

<p class=MsoBodyText style='margin-top:14.05pt;margin-right:67.65pt;margin-bottom:
0cm;margin-left:59.95pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;line-height:122%'><span lang=EN-US>Set the HTTPS services you
may have the HTTPS SSL <span style='letter-spacing:-.2pt'>key </span><span
style='letter-spacing:-.15pt'>for </span>the website. If you don’t want to have<span
style='letter-spacing:-.15pt'> </span>use<span style='letter-spacing:-.25pt'> </span>the<span
style='letter-spacing:-.1pt'> </span>QR<span style='letter-spacing:-.2pt'> </span>code<span
style='letter-spacing:-.1pt'> </span>scanning<span style='letter-spacing:-.2pt'>
</span>function<span style='letter-spacing:-.25pt'> </span>you<span
style='letter-spacing:-.2pt'> </span>can<span style='letter-spacing:-.25pt'> </span>bypass<span
style='letter-spacing:-.15pt'> </span>this<span style='letter-spacing:-.2pt'> </span>step,<span
style='letter-spacing:-.1pt'> </span>if<span style='letter-spacing:-.1pt'> you </span>still<span
style='letter-spacing:-.15pt'> </span>want<span style='letter-spacing:-.25pt'> </span>to<span
style='letter-spacing:-.2pt'> </span>test<span style='letter-spacing:-.25pt'> </span>this
function without register HTTPS use can use this<span style='letter-spacing:
-.35pt'> </span>service:</span></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:224.45pt;margin-bottom:
0cm;margin-left:59.95pt;margin-bottom:.0001pt;line-height:122%'><span
class=SpellE><span lang=EN-US>ngrok</span></span><span lang=EN-US> - secure
introspectable tunnels to localhost <a href="https://ngrok.com/"><span
style='color:#0562C1'>https://ngrok.com/</span></a></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:.3pt'><span lang=EN-US style='font-size:
13.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<h2 style='margin-top:.15pt'><a name="Step_5_set_up_the_SQL"></a><a
name="_bookmark24"></a><span lang=EN-US>Step 5 set up the SQL</span></h2>

<p class=MsoBodyText style='margin-top:14.05pt;margin-right:48.4pt;margin-bottom:
0cm;margin-left:60.0pt;margin-bottom:.0001pt;line-height:122%'><span
lang=EN-US>You should set up the MySQL server and import the SQL statement on
with “<span class=SpellE>webProject.sql</span>” file.</span></p>

<p class=MsoBodyText style='margin-left:60.0pt;line-height:14.6pt;mso-line-height-rule:
exactly'><!--[if gte vml 1]><o:wrapblock><v:shape id="image75.png" o:spid="_x0000_s1052"
  type="#_x0000_t75" alt="一張含有 文字 的圖片  自動產生的描述" style='position:absolute;
  left:0;text-align:left;margin-left:1in;margin-top:17.1pt;width:278.25pt;
  height:124.5pt;z-index:39;visibility:visible;mso-wrap-style:square;
  mso-wrap-distance-left:0;mso-wrap-distance-top:0;mso-wrap-distance-right:0;
  mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
  mso-position-horizontal-relative:page;mso-position-vertical:absolute;
  mso-position-vertical-relative:text'>
  <v:imagedata src="final_report.files/image146.gif" o:title="一張含有 文字 的圖片  自動產生的描述"/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0>
  <tr>
   <td width=96 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=371 height=166 src="final_report.files/image146.gif"
   alt="一張含有 文字 的圖片  自動產生的描述" v:shapes="image75.png"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span lang=EN-US>Then enter the SQL login detail on “<span class=SpellE>phpFunction</span>\<span
class=SpellE>StartUp.php</span>”:</span></p>

<p class=MsoBodyText style='margin-top:.6pt'><span lang=EN-US style='font-size:
15.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-left:60.0pt'><span lang=EN-US>Finally, all
setup is done.</span></p>

</div>

</body>

</html>

