@extends('layouts.web')

@section('content')
<div data-spy="scroll" data-target="#navbar">
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="clinical-text">
                        <h1>IMPROVING</h1>
                        <p>THE STANDARD OF CARE IN CRITICAL CONDITIONS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="strip">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="highlight">CLINICAL VALUE OF HUMAN ALBUMIN</h2>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="clinical area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline">
                        <h2>Albumin Has a High Clinical Value in a Variety of Conditions <sup>1-3</sup> </h2>
                        
                        <p>The safety and effect of Human Albumin on improved outcomes in a variety of pathological conditions have been demonstrated in</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="well-left">
                        <div class="single-well">
                            <img src="{{asset('img/high-clinical-1.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="table-responsive clinicalValTbl">
                        <table class="table">
                            <tbody>
                                <tr class="tr">
                                    <td class="th">Clinical Setting</td>
                                    <td class="th">Trials(n)</td>
                                    <td class="th">Patients(n)</td>
                                    <td class="th">Range</td>
                                    <td class="th">Study Findings</td>
                                </tr>

                                <tr class="tr">
                                    <td class="td">Cardiac surgery<sup>18</sup></td>
                                    <td class="td">31</td>
                                    <td class="td">1559</td>
                                    <td class="td">14-105</td>
                                    <td class="td text-left">
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Amount of fluid in the peri-and post-operative period</li>
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Shunt
                                        </li>
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Extravascular water</li>
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> pressure gradient between COP,PCPW</li>
                                    </td>
                                </tr>
                                <tr class="tr">
                                    <td class="td">Ascites<sup>18</sup></td>
                                    <td class="td">10</td>
                                    <td class="td">942</td>
                                    <td class="td">18-289</td>
                                    <td class="td text-left">
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Complications and activation of the renin-angiotensin system during paracentesis</li>
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Hemodynamics post-paracentesis</li>
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Hospital stays/costs</li>
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Mortlity (combined with cefotaxime) in patients with spontaneous bacterial peritonitis</li>
                                    </td>
                                </tr>
                                <tr class="tr">
                                    <td class="td">Sepsis<sup>18</sup></td>
                                    <td class="td">4</td>
                                    <td class="td">104</td>
                                    <td class="td">12-46</td>
                                    <td class="td text-left">
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Pulmonary edema</li>
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Blood coagulopathy</li>
                                    </td>
                                </tr>
                                <tr class="tr">
                                    <td class="td">Burns<sup>18</sup></td>
                                    <td class="td">4</td>
                                    <td class="td">197</td>
                                    <td class="td">19-79</td>
                                    <td class="td text-left">
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Complications
                                        </li>
                                    </td>
                                </tr>
                                <tr class="tr">
                                    <td class="td">Central nervous system<sup>18</sup></td>
                                    <td class="td">4</td>
                                    <td class="td">418</td>
                                    <td class="td">18-300</td>
                                    <td class="td text-left">
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i>Disability and cerebral edema in neonates with hypoxic-ischemic injury. Need for caution in patients with trauma and associated chronic hypertension</li>
                                    </td>
                                </tr>
                                <tr class="tr">
                                    <td class="td">Stroke<sup>18</sup></td>
                                    <td class="td">2</td>
                                    <td class="td">453</td>
                                    <td class="td">49-434</td>
                                    <td class="td text-left">
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> mNIHSS scores</li>
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> DWI Lesion volume increasa</li>
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Patent/recanalized vessels associated with more significant improvement</li>
                                        <li><i class="fa fa-angle-down" aria-hidden="true"></i> Equivalent death rate > 30 days with saline; higher risk > 30 days in patients > 83 (ALIAS pilot study)</li>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p>COP = colloid osmotic pressure; PCWP = pulmonary capillary wedge pressure; mNIHSS = modified National Institutes of Health Stroke Scale; DWI = diffusion weighted image</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="section-headline">
                        <h5>Albumin Provides an Equivalent Safety Profile to Saline<sup>1</sup></h5>
                        <p>All-cause mortality rates at the 28-day evaluation period</p>
                        <img src="{{asset('img/clinical-3.jpg')}}">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="section-headline">
                        <h5>Albumin Displays a More Favorable Safety Profile  Than Hydroxyethyl Starch (HES) Preparations<sup>2,4</sup></h5>
                    </div>
                    <div class="circle">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p>A systematic review of colloid data published between 1944 and 2002 found that albumin displayed more safety profile than HES.</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <img src="{{asset('img/circle-2.png')}}">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <img src="{{asset('img/circle-1.png')}}">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p>This was backed up by a later systematic review of colloid data published between 2002 and 2010.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="strip">
        <div class="container">
            <h2 class="highlight">USES OF HUMAN ALBUMIN </h2>
            <h2 class="highlight">1. SEPSIS</h2>
        </div>
    </div>
    <div id="about" class="area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline">
                        <h2>Sepsis and Associated Conditions Including:</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="associated">
                        <div class="col-md-7 col-sm-6 col-xs-12">
                            <img src="{{asset('img/spasi-condition.png')}}">
                        </div>
                        <div class="col-md-5 col-sm-6 col-xs-12">
                            <div class="testimonials">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <p>Hypovolemia is treated with
                                    large volumes of resuscitation
                                    fluids, making safety and value
                                    of volume expanders a critical
                                    concern for these acutely ill
                                    patients. 5</p>
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reduced-mortality-risk">
                <div class="section-headline">
                    <h5>Reduced Mortality Risk with Albumin Resuscitation in Sepsis 6 Compared to Saline</h5>
                    <p>Mortality rate among patients with severe sepsis in a subgroup analysis of the SAFE study<sup>*6</sup></p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('img/second-graph.jpg')}}">
                    </div>
                    <div class="col-md-6">
                        <div class="reduced-mortality">
                            <p>*The Saline versus Albumin Fluid Evaluation (SAFE) Study was a blinded, randomized controlled trial to compare the effect of fluid resuscitation with albumin or saline on mortality in a heterogeneous population of patients in the ICU. A subgroup analiysis of patients with severe sepsis at the time of andominzation is presented.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="strip">
            <div class="container">
                <h2 class="highlight">2. LIVER DISEASE</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="advanced-cirrhosis">
                    <div class="col-md-8">
                        <div class="col-md-5 col-sm-5">
                            <div class="circle"><span>Liver dysfunction</span></div>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <div class="circle"><span>Dilution of albumin content in the extracellular space*</span></div>
                        </div>
                        <div class="col-md-12 col-sm-12 cirrhosis-circle">
                            <div class="circle-2">
                                <span>Hypovolemin, & HypoalbuminemiaIf left untreated,hypovolemia willexacerbateleading to:</span>
                                <img src="{{asset('img/dotted.png')}}">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="circle-2"><span>Ascites</span></div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="circle-2"><span>Hepatorena lsyndrome with spontaneous bacterial peritonitis</span></div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="circle-2"><span>Post paracentesis circulatory dysfunction (PCD)</span></div>
                        </div>
                    </div>
                    <div class="col-md-4 testimonials-details">
                        <div class="cirrhosis-testimonials">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p>MAIN GOAL8 Preservation of central blood volume through fluid resuscitation</p>
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-headline">
                <h5>Albumin Reduces Morbidity in LVP*</h5>
                <p>Compared with Alternative Treatments<sup>**9</sup></p>
            </div>
            <div class="row">
                <div class="col-md-6">
                   <div class="table-responsive morbidityTbl">
    <table class="table">
        <thead>
            <tr>
              <th>Morbidity </th>
              <th>Odds Ratio (95% CI)</th>                                          
            </tr>
        </thead>   
        <tbody>
            <tr>
                <td>Ascites recurrence</td>
                <td>0.85 (0.61 -1 .18)</td>                          
            </tr>
            <tr>
                <td>Renal impairment </td>
                <td>0.83 (0.49-1.42) </td>                          
            </tr>
            <tr>
                <td>Hepatic encephalopathy </td>
                <td>0.91 (0.50-1.66) </td>                          
            </tr>
            <tr>
                <td>Portal hypertensive bleeding</td>
                <td>0.97 (0.45-2.11) </td>                          
            </tr>
            <tr>
                <td>Hospital readmission </td>
                <td>0.81 (0.561.18) </td>                          
            </tr>
        </tbody>
    </table>
</div>
                    <p>In a meta-analysis of prospective studies of albumin therapy in LVP. albumin treatment was associated with 1 5-19% reductions in the odds of particular morbidity endpoints, compared with control treatments. 'LVP: patients undergoing large-volume paracentesis; "Alternative treatments investigated in the meta-analysis were dextran, gelatin, HES, and hypertonic saline. </p>
                </div>
                <div class="col-md-6">
                    <p>Mortality rates across 1 1 trials with mortality data comparing albumin with alternative treatments9 </p>
                    <img src="{{asset('img/second-graph.jpg')}}">
                </div>
            </div>
        </div>
    </div>
    <div class="strip">
        <div class="container">
            <h2 class="highlight">3. CARDIAC SURGERY</h2>
        </div>
    </div>
    <div class="area-padding">
        <div class="container">
            <div class="section-headline">
                <h2>Sepsis and Associated Conditions Including:</h2>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="enhance-img">
                        <img src="{{asset('img/all-circle.jpg')}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="enhance-text">
                        <h3>Lack of Serum Albumin10</h3>
                        <p>- Mortality after coronary artery bypass surgery </p>
                        <p>- Risk of early reoperation</p>
                        <p>- Post-operative renal failure </p>

                        <p>- Prolonged ventilator support </p>
                        <p>- ICU stay </p>
                        <p>- Total length of hospital stay Ascites recurrence</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="{{asset('img/drop-img.jpg')}}">
                </div>
            </div>
            <div class="section-headline">
                <h5>Albumin Reduces Mortality Odds by 25%</h5>
                <p>Compared with Non-protein Colloid Use<sup>10</sup></p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="surgery-graph-img">
                        <img src="{{asset('img/third-graph.jpg')}}">
                        <h4>Albumin Displays a More Favorable Safety Profile</h4>
                        <p>than Hydroxyethyl Starch (HES), in Cardiac Surgeries10</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <p>In a retrospective review of discharge data on 19,578 patients undergoing coronary artery bypass graft (CABG) surgery at 298 US hospitals, albumin and non-protein colloids as volume expanders after CABG surgery were compared.10
                    </p>
                    <p class="lowerOdd">
                        In the multivariable logistic regression analysis, albumin use was associated with <span> 25%  lower  odds of mortality </span> compared to non-protein colloid use (odds ratio, 0.80; 95% confidence interval, 0.67 to 0.96).10
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="strip">
        <div class="container">
            <h2 class="highlight">4. GENERAL SURGERY</h2>
        </div>
    </div>
    <div class="container">
        <div class="serum-graph">
            <h4>STABLE SERUM ALBUMIN LEVELS</h4>
            <p><strong>COMPARED TO STARCH SOLUTIONS<sup>13</sup></strong></p>
            <p>Pre- and post-surgical serum albumin concentrations</p>
            <img src="{{asset('img/center-graph.jpg')}}">
            <p>A randomized trial of 40 surgery patients compared pre- and post-surgical serum albumin concentrations in patients treated with starch and albumin.13</p>
        </div>
    </div>
    <div class="strip">
        <div class="container">
            <h2 class="highlight">5. INTENSIVE CARE</h2>
        </div>
    </div>
    <div class="table-concentration">
        <div class="container">
            <div class="section-headline">
                <h5>Albumin Is a Rapid Euective Therapy in the Intensive Care<sup>14,15</sup></h5>
                <p><strong>In the intensive care unit<sup>14,15</sup> 5% and 20% albumin solutions are used to:</strong></p>
                <p>-Rapidly restore blood volume. </p>
                <p>-Address hypoalbuminemia (serum albumin concentration ( 34 g/L). </p>
                <p>-Interrupt the pathological processes that lead to multi-organ failure. </p>
                <div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
              <th>Albumin in the Intensive Careen.<sup>11,12</sup></th>
              <th>5%</th>
              <th>20%</th>                                          
            </tr>
        </thead>   
        <tbody>
            <tr>
                <td>Hypovolemia, absence of adequate or excessive hydration </td>
                <td>X</td>
                <td>X<sup>a</sup></td>                                      
            </tr>
            <tr>
                <td>Hypovolemia (long-standing) with hypoalbuminemia, adequate hydration or edema   </td>
                <td></td>
                <td></td>                                      
            </tr>
            <tr>
                <td>Hypovolemia with significant plasma volume deficits </td>
                <td>X<sup>B</sup></td>             
                <td>X</td>                                      
            </tr>
            <tr>
                <td>Hypoalbuminemia </td>
                <td>X</td>             
                <td>X</td>                                      
            </tr>
        </tbody>
    </table>
</div>
                <p><strong>-Dilute 20% albumin with crystalloid solutions;</strong></p>
                <p><strong>prefer to prescribing information for precautions.</strong></p>
            </div>
        </div>
    </div>
    <div class="strip">
        <div class="container">
            <h2 class="highlight">6. CRITICALLY ILL PATIENTS</h2>
        </div>
    </div>
    <div class="table-concentration">
        <div class="container">
            <div class="section-headline">
                <h5>Albumin Is a Rapid Euective Therapy in the Intensive Care<sup>14,15</sup></h5>
                <p><strong>In the intensive care unit<sup>14,15</sup> 5% and 20% albumin solutions are used to:</strong></p>
                <p>-Rapidly restore blood volume. </p>
                <p>-Address hypoalbuminemia (serum albumin concentration ( 34 g/L). </p>
                <p>-Interrupt the pathological processes that lead to multi-organ failure. </p>
                <div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
              <th>Indication</th>
              <th>Concentration</th>
              <th>Fluid regimen</th>                                          
              <th>Duration</th>                                          
            </tr>
        </thead>   
        <tbody>
            <tr>
                <td>Acute illness. volume replacement   </td>
                <td>5%</td>
                <td>250-500 ml in older children and adults 12</td>                                      
                <td>30 minute intervals if response inadequate 12</td>                                      
            </tr>
            <tr>
                <td>Burns. resuscitation phase after 24 hours</td>
                <td>20%</td>
                <td> 100-200 ml in adults<sup>11</sup> - 2.5 to 5 ml per kg body weight in children<sup>11</sup></td>                                      
                <td>1 5-30 minute intervals until adequate response<sup>11</sup></td>                                      
            </tr>
            <tr>
                <td>Burns, post-resuscitation phase </td>
                <td>5%, 20%</td>             
                <td>I-2 g/kg/die <sup>16</sup></td>                                      
                <td>Dependent on treatment response<sup>12</sup></td>                                      
            </tr>
            <tr>
                <td>Cardiopulmonary bypass priming</td>
                <td>20%</td>             
                <td>200-400 ml (40-80 g)<sup>17</sup></td>                                      
                <td>Dependent on treatment response<sup>12</sup></td>                                      
            </tr>
            <tr>
                <td>Hypoalbuminemia </td>
                <td>5%. 20% </td>             
                <td>    Dose (g) : (2.5 g/dL-actual albumin concentration) x (kg x (0.8))<sup>16</sup></td>                                      
                <td>Daily dose should not exceed 2 g/Kg 12,14</td>                                      
            </tr>
            <tr>
                <td>Large-volume paracentesis</td>
                <td>20%</td>             
                <td>5 g/L of fluid removed <sup>16</sup></td>                                      
                <td>During LVP</td>                                      
            </tr>
            <tr>
                <td>Therapeutic plasmapheresis  </td>
                <td>5%</td>             
                <td>500 mL-1000 ml (25-50 g) <sup>16</sup></td>                                      
                <td>Once</td>                                      
            </tr>
        </tbody>
    </table>
</div>

                <p><small>LVP z lange volume paracentesiS CVP : central vetoes pressure; PAWP pulmonary aaerial w-edge procure; PCWP pukvtonarycapilbry wedge pressure. </small>
                    <p>
            </div>
        </div>
    </div>
    <div class="strip">
        <div class="container">
            <h2 class="highlight">SAFETY & QUALITY OF HUMAN ALBUMIN®</h2>
        </div>
    </div>
    <div class="table-concentration">
        <div class="container">
            <div class="section-headline">
                <h5>Multiple Safety Manufacturing Steps</h5>
                <p>Before Production <sup>21</sup></p>
                <div class="img-baaner">
                    <img src="{{asset('img/banner-s.jpg')}}">
                </div>
                <div class="section-headline">
                    <h5>In Vitro Studies Demonstrate That the Manufacturing Process  for Human Albumin Provides Significant Viral Reduction<sup>11</sup></h5>
                </div>
            </div>
            <div class="row">
                <div class="viral-reduction">
                    <div class="col-md-8">
                        <img src="{{asset('img/table-imgs.jpg')}}">
                    </div>
                    <div class="col-md-4">
                        <p>N/D Not Determined bother albumin fractionation process steps (processing of cryo-poor plasma to Fraction l+ll+lll/ll+lll supernatant and processing of Fraction V suspension to Cuno 90LP filtrate) showed significant virus reduction capacity in in-vitro viral clearance studies. These process steps also contribute to the overall viral clearance robustness of the manufacturing process. However, since the mechanism of virus removal is similar to that of this particular process step, the viral inactivation data from other steps were not used in the calculation of the mean cumulative reduction factor. *-Recent scientific data suggest that the actual human parvovirus B19 (B19V) is far more effectively inactivated by pasteurization than indicated by model virus data
                        </p>
                    </div>
                </div>
            </div>
            <div class="text">
                Critical steps in the processing of Human Albumin help support its viral safety
            </div>
            <div class="section-headline">
                <h5>Human Albumin is Committed to Quality and Plasma Safety<sup>7,22,23</sup></h5>
            </div>
            <div class="row">
                <div class="quality-commited">
                    <div class="col-md-6">
                        <p class="lowerOdd">
                            Shire is a member of PPTA (Plasma Protein Therapeutics association).22 Shire's innovative quality plasma process is QSEAL-certified and IQPP compliant.7,23
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('img/ppta.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="strip">
        <div class="container">
            <h2 class="highlight">ABBREVIATED PRESCRIBING INFORMATION</h2>
        </div>
    </div>
    <div class="container">
        <div class="preference">
            <p><strong>(Before prescribing please consult the full Summary of Product Characteristics (SmPC).)</strong></p>
            <p>Active Ingredient: Human Albumin Indication: Restoration and maintenance of circulating blood volume where volume deficiency has been demonstrated, and use of a colloid is appropriate. The
            choice of albumin rather than artificial colloid will depend on the clinical situation of the individual patient, based on official recommendations. Dosage and Administration: The concentration of the
            albumin preparation, dosage and the infusion rate should be adjusted to the patient’s individual requirements. The dose required depends on the size of the patient, the severity of trauma or illness
            and on continuing fluid and protein losses. Measures of adequacy of circulating volume and not plasma albumin levels should be used to determine the dose required. If human albumin is to be
            administered, haemodynamic performance should be monitored regularly; this may include; arterial blood pressure and pulse rate; central venous pressure; pulmonary artery wedge pressure; urine
            output; electrolyte concentration; haematocrit/haemoglobin; clinical signs of cardiac/respiratory failure (e.g. dyspnoea); clinical signs of increasing intra-cranial pressure (e.g. headache). Method of
            Administration: Human Albumin 200 g/l can be directly administered by the intravenous route, or it can also be diluted in an isotonic solution (e.g. 5% glucose or 0.9% sodium chloride). The infusion
            rate should be adjusted according to the individual circumstances and the indication. In plasma exchange the infusion rate should be adjusted to the rate of removal. Contraindications:
            Hypersensitivity to albumin preparations or to any of the excipients. Warnings and Precautions: Hypersensitivity: Suspicion of allergic or anaphylactic type reactions requires immediate
            discontinuation of the injection. In case of shock, standard medical treatment for shock should be implemented. Hypervolaemia or Haemodilution: Albumin should be used with caution in conditions
            where hypervolaemia and its consequences or haemodilution could represent a special risk for the patient. Examples of such conditions are; decompensated cardiac insufficiency; hypertension;
            oesophageal varices; pulmonary oedema; haemorrhagic diathesis; severe anaemia; renal and post-renal anuria. Hypervolaemia may occur if the dosage and rate of infusion are not adjusted to the
            patient’s circulatory situation. At the first clinical signs of cardiovascular overload (headache, dyspnoea, jugular vein congestion), or increased blood pressure, raised venous pressure and pulmonary
            oedema, the infusion is to be stopped immediately. Circulatory Overload and Hyperhydration: The colloid-osmotic effect of human albumin 200 g/l is approximately four times that of blood plasma.
            Therefore, when concentrated albumin is administered, care must be taken to assure adequate hydration of the patient. Patients should be monitored carefully to guard against circulatory overload
            and hyperhydration. Electrolyte Balance: 200 g/l – 250 g/l Human albumin solutions are relatively low in electrolytes compared to the 40 – 50 g/l human albumin solutions. When albumin is given, the
            electrolyte status of the patient should be monitored and appropriate steps taken to restore or maintain the electrolyte balance. Sodium Content: Human Albumin 200g/l contains 130-160 mmol/l
            sodium. This is to be taken into consideration by patients on a controlled sodium diet. Haemolysis: Albumin solutions must not be diluted with water for injections as this may cause haemolysis in
            recipients. Coagulation: If comparatively large volumes are to be replaced, controls of coagulation and haematocrit are necessary. Care must be taken to ensure adequate substitution of other blood
            constituents (coagulation factors, electrolytes, platelets and erythrocytes). Transmissible agents: Despite standard measures to prevent infections resulting from the use of medicinal products prepared
            from human blood or plasma, when they are administered, the possibility of transmitting infectious agents cannot be totally excluded. This also applies to unknown or emerging viruses and other
            pathogens. There are no reports of virus transmissions with albumin manufactured to European Pharmacopoeia specifications by established processes. It is strongly recommended that every time
            that Human Albumin 200 g/l is administered to a patient, the name and batch number of the product are recorded in order to maintain a link between the patient and the batch of the product.
            Interactions: No specific interactions of Human Albumin with other medicinal products are known. Fertility, pregnancy and lactation: The safety of Human Albumin 200 g/l for use in human
            pregnancy has not been established in controlled clinical trials. However, clinical experience with albumin suggests that no harmful effects on the course of pregnancy, or on the foetus and the neonate
            are to be expected. The effects of human albumin on fertility have not been established in controlled clinical trials. Driving: No effects on ability to drive and use machines have been observed.
            Undesirable Effects:Rare Adverse Events (ARs) included: Nausea, flushing, skin rash, fever. Very Rare ARs included: anaphylactic shock. Overdose: Hypervolaemia may occur if the dosage and infusion
            rate are too high. At the first clinical signs of cardiovascular overload (headache, dyspnoea, jugular vein congestion), or increased blood pressure, raised central venous pressure and pulmonary
            oedema, the infusion should be stopped immediately and the patient’s haemodynamic parameters carefully monitored. Date of Revision: May 2016. Name and Address of MA Holder: Baxter AG
            Vienna</p>
            <p>Name and Address of MA Holder:
                Baxter AG Vienna
                Further information is available on request.
                Suspected adverse events should be reported to Shire at:
                drugsafety@shire.com</p>
            <div class="cunsult">
                <h4>REFERENCES:</h4>
                <p>1. The SAFE Study Investigators. A Comparison of Albumin and Saline for Fluid Resuscitation in the Intensive Care Unit. (2004). New England Journal of Medicine, 2004(350), pp.2247-2256. </p>
                <p>2. Groeneveld, A., Navickis, R. and Wilkes, M. (2011). Update on the Comparative Safety of Colloids. Annals of Surgery, 253(3), pp.470-483.
                </p>
                <p>3. Vincent, J., Navickis, R. and Wilkes, M. (2004). Morbidity in hospitalized patients receiving human albumin: A meta-analysis of randomized, controlled trials. Critical Care Medicine, 32(10), pp.2029-2038. Barron, M., Wilkes, M. and Navickis, R. (2004). A Systematic Review of the Comparative Safety of Colloids. Archives of Surgery. 139(5), pp. 552-563.S.
                </p>
                <p>4. Barron, M., Wilkes, M. and Navickis, R. (2004). A Systematic Review of the Comparative Safety of Colloids. Archives of Surgery, 139(5), pp. 552-563.5.</p>
                <p>5. Wiedermann, C. (2008). Systematic review of randomized clinical trials on the use of hydroxyethyl starch for fluid management in sepsis. BMC Emergency Medicine, 8(1).</p>
                <p>6. Finfer, S., McEvoy, S., Bellomo, R., McArthur, C., Myburgh, J. and Norton, R. (2011). Impact of albumin compared to saline on organ function and mortality of patients with severe sepsis. Intensive Care Medicine,
                37(1), pp.86-96.</p>
                <p>7. Stern, J. (2017). Pathogen Safety - Plasma Protein Therapeutics Association (PPTA). [online] Pptaglobal.org. Available at: http://www.pptaglobal.org/about-us/current-members [Accessed 10 Jul. 2017].</p>
                <p>8. Bernardi, M., Ricci, C. and Zaccherini, G. (2014). Role of Human Albumin in the Management of Complications of Liver Cirrhosis. Journal of Clinical and Experimental Hepatology, 4(4), pp.302-311.</p>
                <p>9. Bernardi, M., Caraceni, P., Navickis, R. and Wilkes, M. (2012). Albumin infusion in patients undergoing large-volume paracentesis: A meta-analysis of randomized trials. Hepatology, 55(4), pp.1172-1181.</p>
                <p>10. Sedrakyan, A., Gondek, K., Paltiel, D. and Elefteriades, J. (2003). Volume Expansion With Albumin Decreases Mortality After Coronary Artery Bypass Graft Surgerya. Chest, 123(6), pp.1853-1857.</p>
                <p>11. Flexbumin 25% Albumin (Human) [package insert]. Westlake Village, CA: Shire plc; 2009.</p>
                <p>12. Buminate 5% [Albumin (Human)] [package insert]. Westlake Village, CA: Shire plc; 2009.</p>
                <p>13. Reine, P., Kongsgaard, U., Andersen, A., Thøgersen, A. and Olsen, H. (2008). Infusion of albumin attenuates changes in serum protein binding of drugs in surgical patients compared with volume replacement with HAES. Acta Anaesthesiologica Scandinavica, 52(3), pp.406-412.</p>
                <p>14. Jacob, M., Chappell, D., Conzen, P., Wilkes, M., Becker, B. and Rehm, M. (2008). Small-volume resuscitation with hyperoncotic albumin: a systematic review of randomized clinical trials. Critical Care, 12(2), p.R34.</p>
                <p>15. Vincent, J., Dubois, M., Navickis, R. and Wilkes, M. (2003). Hypoalbuminemia in Acute Illness: Is There a Rationale for Intervention? Annals of Surgery, 237(3), pp.319-334.</p>
                <p>16. Liumbruno G, Bennardello F, Lattanzio A, Piccoli P, as Italian Society of Transfusion Medicine and Immunohaematology (SIMTI) Working Party G. (2009). Recommendations for the use of albumin and immunoglobulins.Blood Transfusion. 7(3), pp. 216-234.</p>
                <p>17. Russell, J., Navickis, R. and Wilkes, M. (2004). Albumin versus crystalloid for pump priming in cardiac surgery: Meta-analysis of controlled trials. Journal of Cardiothoracic and Vascular Anesthesia, 18(4), pp.429-437.</p>
                <p>18. Luciolli P. Albumin: Volume Replacement by a Drug. Rome, Italy: AIM Group; 2010.</p>
                <p>19. Shin DH, Moon GJ, Bang OY. (2007). Albumin therapy in acute stroke patients. Neurology, 254(7), pp.870-878.</p>
                <p>20. Ginsberg, M., Palesch, Y., Martin, R., Hill, M., Moy, C., Waldman, B., Yeatts, S., Tamariz, D. and Ryckborst, K. (2010). The Albumin in Acute Stroke (ALIAS) Multicenter Clinical Trial: Safety Analysis of Part 1 and Rationale and Design of Part 2. Stroke, 42(1), pp.119-127.</p>
                <p>21. FLEXBUMIN 25% PI. August 2013.</p>
                <p>22. Menger, A. (n.d.). Current Members - Plasma Protein Therapeutics Association (PPTA). [online] Pptaglobal.org. Available at: http://www.pptaglobal.org/membership/current-members [Accessed 10 Jul. 2017].</p>
                <p>23. Menger, A. (2017). QSEAL - Plasma Protein Therapeutics Association (PPTA). [online] Pptaglobal.org. Available at: http://www.pptaglobal.org/safety-quality/standards/qseal [Accessed 10 Jul. 2017].</p>

            </div>
        </div>
    </div>
    
</div>
@endsection