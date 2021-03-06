<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class APIController extends Controller
{
    public function HrEmp(Request $request)
    {
        $start = $request->get('startDate');
        $end = $request->get('endDate');
        $token = $request->header('token');

        $ownToken = md5('elearning'.date('YmdH'));
        if($ownToken == $token){
            $dataUsers=[
                //{PSNCOD:'1',PSNNAME:'1',IDENTITYCARDNUMBER:'',EMPLOYEEGENDER:'',BIRTHDATE:'',PLACEOFBIRTH:'',MOBILEPHONE:'',ISINCUMBENT:'',FORMERWORKID:'',ORIGINALWORKID:'',JOBNAME:'',ONBOARDDATE:'',IMPORTANTLEADER:'',USEDNAME:'',HOMEADDRESS:'',BIRTHCOUNTRY:'',ETHNICCODE:'',ETHNIC:'',POLITICALSTATUSCODE:'',POLITICALSTATUS:'',DEPARTMENTPRIMARYKEY:'',NICKNAME:'',TIER1DEPARTMENTNAME:'',TIER1DEPARTMENTCODE:'',TIER2DEPARTMENTNAME:'',TIER2DEPARTMENTCODE:'',JOBDESCRIPTION:'',EMPLOYEECLASSCODE:'',EMPLOYEECLASS:'',EMPLOYEECLASSCOPE:'',MAILBOX:'',MOBILE:'',OFFICEPHONE:'',HOMEPHONE:'',FIRSTFOREIGNLANGUAGE:'',COMPUTERLEVEL:'',RESIDENCE:'',POSTCODE:'',IDENTITYCARDADDRESS:'',SUPERIOR:'',HIGHERSUPERIOR:'',OTHERNAME:'',EDUCATION:'',MARRIAGE:'',ORGANIZATIONNO:'',ISVALID:''}
                ['PSNCOD'=>'303','PSNNAME'=>'PSNNAME1','IDENTITYCARDNUMBER'=>'IDENTITYCARDNUMBER1','EMPLOYEEGENDER'=>'0','BIRTHDATE'=>'BIRTHDATE1','PLACEOFBIRTH'=>'PLACEOFBIRTH1','MOBILEPHONE'=>'MOBILEPHONE1','ISINCUMBENT'=>'0','FORMERWORKID'=>'FORMERWORKID1','ORIGINALWORKID'=>'ORIGINALWORKID1','JOBNAME'=>'JOBNAME1','ONBOARDDATE'=>'ONBOARDDATE1','IMPORTANTLEADER'=>'IMPORTANTLEADER1','USEDNAME'=>'USEDNAME1','HOMEADDRESS'=>'HOMEADDRESS1','BIRTHCOUNTRY'=>'BIRTHCOUNTRY1','ETHNICCODE'=>'ETHNICCODE1','ETHNIC'=>'ETHNIC1','POLITICALSTATUSCODE'=>'POLITICALSTATUSCODE1','POLITICALSTATUS'=>'POLITICALSTATUS1','DEPARTMENTPRIMARYKEY'=>'DEPARTMENTPRIMARYKEY1','NICKNAME'=>'NICKNAME1','TIER1DEPARTMENTNAME'=>'TIER1DEPARTMENTNAME1','TIER1DEPARTMENTCODE'=>'TIER1DEPARTMENTCODE1','TIER2DEPARTMENTNAME'=>'TIER2DEPARTMENTNAME1','TIER2DEPARTMENTCODE'=>'TIER2DEPARTMENTCODE1','JOBDESCRIPTION'=>'JOBDESCRIPTION1','EMPLOYEECLASSCODE'=>'EMPLOYEECLASSCODE1','EMPLOYEECLASS'=>'EMPLOYEECLASS1','EMPLOYEECLASSCOPE'=>'EMPLOYEECLASSCOPE1','MAILBOX'=>'MAILBOX1@example.com','MOBILE'=>'13950789090','OFFICEPHONE'=>'OFFICEPHONE1','HOMEPHONE'=>'HOMEPHONE1','FIRSTFOREIGNLANGUAGE'=>'FIRSTFOREIGNLANGUAGE1','COMPUTERLEVEL'=>'COMPUTERLEVEL1','RESIDENCE'=>'RESIDENCE1','POSTCODE'=>'POSTCODE1','IDENTITYCARDADDRESS'=>'IDENTITYCARDADDRESS1','SUPERIOR'=>'SUPERIOR1','HIGHERSUPERIOR'=>'HIGHERSUPERIOR1','OTHERNAME'=>'OTHERNAME1','EDUCATION'=>'EDUCATION1','MARRIAGE'=>'MARRIAGE1','ORGANIZATIONNO'=>'ORGANIZATIONNO1','ISVALID'=>'ISVALID1'],
                ['PSNCOD'=>'304','PSNNAME'=>'PSNNAME2','IDENTITYCARDNUMBER'=>'IDENTITYCARDNUMBER2','EMPLOYEEGENDER'=>'1','BIRTHDATE'=>'BIRTHDATE2','PLACEOFBIRTH'=>'PLACEOFBIRTH2','MOBILEPHONE'=>'MOBILEPHONE2','ISINCUMBENT'=>'1','FORMERWORKID'=>'FORMERWORKID2','ORIGINALWORKID'=>'ORIGINALWORKID2','JOBNAME'=>'JOBNAME2','ONBOARDDATE'=>'ONBOARDDATE2','IMPORTANTLEADER'=>'IMPORTANTLEADER2','USEDNAME'=>'USEDNAME2','HOMEADDRESS'=>'HOMEADDRESS2','BIRTHCOUNTRY'=>'BIRTHCOUNTRY2','ETHNICCODE'=>'ETHNICCODE2','ETHNIC'=>'ETHNIC2','POLITICALSTATUSCODE'=>'POLITICALSTATUSCODE2','POLITICALSTATUS'=>'POLITICALSTATUS2','DEPARTMENTPRIMARYKEY'=>'DEPARTMENTPRIMARYKEY2','NICKNAME'=>'NICKNAME2','TIER1DEPARTMENTNAME'=>'TIER1DEPARTMENTNAME2','TIER1DEPARTMENTCODE'=>'TIER1DEPARTMENTCODE2','TIER2DEPARTMENTNAME'=>'TIER2DEPARTMENTNAME2','TIER2DEPARTMENTCODE'=>'TIER2DEPARTMENTCODE2','JOBDESCRIPTION'=>'JOBDESCRIPTION2','EMPLOYEECLASSCODE'=>'EMPLOYEECLASSCODE2','EMPLOYEECLASS'=>'EMPLOYEECLASS2','EMPLOYEECLASSCOPE'=>'EMPLOYEECLASSCOPE2','MAILBOX'=>'MAILBOX2@example.com','MOBILE'=>'13950789091','OFFICEPHONE'=>'OFFICEPHONE2','HOMEPHONE'=>'HOMEPHONE2','FIRSTFOREIGNLANGUAGE'=>'FIRSTFOREIGNLANGUAGE2','COMPUTERLEVEL'=>'COMPUTERLEVEL2','RESIDENCE'=>'RESIDENCE2','POSTCODE'=>'POSTCODE2','IDENTITYCARDADDRESS'=>'IDENTITYCARDADDRESS2','SUPERIOR'=>'SUPERIOR2','HIGHERSUPERIOR'=>'HIGHERSUPERIOR2','OTHERNAME'=>'OTHERNAME2','EDUCATION'=>'EDUCATION2','MARRIAGE'=>'MARRIAGE2','ORGANIZATIONNO'=>'ORGANIZATIONNO2','ISVALID'=>'ISVALID2'],
                ['PSNCOD'=>'301','PSNNAME'=>'PSNNAME1','IDENTITYCARDNUMBER'=>'IDENTITYCARDNUMBER1','EMPLOYEEGENDER'=>'0','BIRTHDATE'=>'BIRTHDATE1','PLACEOFBIRTH'=>'PLACEOFBIRTH1','MOBILEPHONE'=>'MOBILEPHONE1','ISINCUMBENT'=>'0','FORMERWORKID'=>'FORMERWORKID1','ORIGINALWORKID'=>'ORIGINALWORKID1','JOBNAME'=>'JOBNAME1','ONBOARDDATE'=>'ONBOARDDATE1','IMPORTANTLEADER'=>'IMPORTANTLEADER1','USEDNAME'=>'USEDNAME1','HOMEADDRESS'=>'HOMEADDRESS1','BIRTHCOUNTRY'=>'BIRTHCOUNTRY1','ETHNICCODE'=>'ETHNICCODE1','ETHNIC'=>'ETHNIC1','POLITICALSTATUSCODE'=>'POLITICALSTATUSCODE1','POLITICALSTATUS'=>'POLITICALSTATUS1','DEPARTMENTPRIMARYKEY'=>'DEPARTMENTPRIMARYKEY1','NICKNAME'=>'NICKNAME1','TIER1DEPARTMENTNAME'=>'TIER1DEPARTMENTNAME1','TIER1DEPARTMENTCODE'=>'TIER1DEPARTMENTCODE1','TIER2DEPARTMENTNAME'=>'TIER2DEPARTMENTNAME1','TIER2DEPARTMENTCODE'=>'TIER2DEPARTMENTCODE1','JOBDESCRIPTION'=>'JOBDESCRIPTION1','EMPLOYEECLASSCODE'=>'EMPLOYEECLASSCODE1','EMPLOYEECLASS'=>'EMPLOYEECLASS1','EMPLOYEECLASSCOPE'=>'EMPLOYEECLASSCOPE1','MAILBOX'=>'MAILBOX1@example.com','MOBILE'=>'13950789090','OFFICEPHONE'=>'OFFICEPHONE1','HOMEPHONE'=>'HOMEPHONE1','FIRSTFOREIGNLANGUAGE'=>'FIRSTFOREIGNLANGUAGE1','COMPUTERLEVEL'=>'COMPUTERLEVEL1','RESIDENCE'=>'RESIDENCE1','POSTCODE'=>'POSTCODE1','IDENTITYCARDADDRESS'=>'IDENTITYCARDADDRESS1','SUPERIOR'=>'SUPERIOR1','HIGHERSUPERIOR'=>'HIGHERSUPERIOR1','OTHERNAME'=>'OTHERNAME1','EDUCATION'=>'EDUCATION1','MARRIAGE'=>'MARRIAGE1','ORGANIZATIONNO'=>'ORGANIZATIONNO1','ISVALID'=>'ISVALID1'],
                ['PSNCOD'=>'302','PSNNAME'=>'PSNNAME5','IDENTITYCARDNUMBER'=>'IDENTITYCARDNUMBER2','EMPLOYEEGENDER'=>'1','BIRTHDATE'=>'BIRTHDATE2','PLACEOFBIRTH'=>'PLACEOFBIRTH2','MOBILEPHONE'=>'MOBILEPHONE2','ISINCUMBENT'=>'1','FORMERWORKID'=>'FORMERWORKID2','ORIGINALWORKID'=>'ORIGINALWORKID2','JOBNAME'=>'JOBNAME2','ONBOARDDATE'=>'ONBOARDDATE2','IMPORTANTLEADER'=>'IMPORTANTLEADER2','USEDNAME'=>'USEDNAME2','HOMEADDRESS'=>'HOMEADDRESS2','BIRTHCOUNTRY'=>'BIRTHCOUNTRY2','ETHNICCODE'=>'ETHNICCODE2','ETHNIC'=>'ETHNIC2','POLITICALSTATUSCODE'=>'POLITICALSTATUSCODE2','POLITICALSTATUS'=>'POLITICALSTATUS2','DEPARTMENTPRIMARYKEY'=>'DEPARTMENTPRIMARYKEY2','NICKNAME'=>'NICKNAME2','TIER1DEPARTMENTNAME'=>'TIER1DEPARTMENTNAME2','TIER1DEPARTMENTCODE'=>'TIER1DEPARTMENTCODE2','TIER2DEPARTMENTNAME'=>'TIER2DEPARTMENTNAME2','TIER2DEPARTMENTCODE'=>'TIER2DEPARTMENTCODE2','JOBDESCRIPTION'=>'JOBDESCRIPTION2','EMPLOYEECLASSCODE'=>'EMPLOYEECLASSCODE2','EMPLOYEECLASS'=>'EMPLOYEECLASS2','EMPLOYEECLASSCOPE'=>'EMPLOYEECLASSCOPE2','MAILBOX'=>'MAILBOX2@example.com','MOBILE'=>'13950789091','OFFICEPHONE'=>'OFFICEPHONE2','HOMEPHONE'=>'HOMEPHONE2','FIRSTFOREIGNLANGUAGE'=>'FIRSTFOREIGNLANGUAGE2','COMPUTERLEVEL'=>'COMPUTERLEVEL2','RESIDENCE'=>'RESIDENCE2','POSTCODE'=>'POSTCODE2','IDENTITYCARDADDRESS'=>'IDENTITYCARDADDRESS2','SUPERIOR'=>'SUPERIOR2','HIGHERSUPERIOR'=>'HIGHERSUPERIOR2','OTHERNAME'=>'OTHERNAME2','EDUCATION'=>'EDUCATION2','MARRIAGE'=>'MARRIAGE2','ORGANIZATIONNO'=>'ORGANIZATIONNO2','ISVALID'=>'ISVALID2'],
                ['PSNCOD'=>'305','PSNNAME'=>'PSNNAME6','IDENTITYCARDNUMBER'=>'IDENTITYCARDNUMBER2','EMPLOYEEGENDER'=>'1','BIRTHDATE'=>'BIRTHDATE2','PLACEOFBIRTH'=>'PLACEOFBIRTH2','MOBILEPHONE'=>'MOBILEPHONE2','ISINCUMBENT'=>'1','FORMERWORKID'=>'FORMERWORKID2','ORIGINALWORKID'=>'ORIGINALWORKID2','JOBNAME'=>'JOBNAME2','ONBOARDDATE'=>'ONBOARDDATE2','IMPORTANTLEADER'=>'IMPORTANTLEADER2','USEDNAME'=>'USEDNAME2','HOMEADDRESS'=>'HOMEADDRESS2','BIRTHCOUNTRY'=>'BIRTHCOUNTRY2','ETHNICCODE'=>'ETHNICCODE2','ETHNIC'=>'ETHNIC2','POLITICALSTATUSCODE'=>'POLITICALSTATUSCODE2','POLITICALSTATUS'=>'POLITICALSTATUS2','DEPARTMENTPRIMARYKEY'=>'DEPARTMENTPRIMARYKEY2','NICKNAME'=>'NICKNAME2','TIER1DEPARTMENTNAME'=>'TIER1DEPARTMENTNAME2','TIER1DEPARTMENTCODE'=>'TIER1DEPARTMENTCODE2','TIER2DEPARTMENTNAME'=>'TIER2DEPARTMENTNAME2','TIER2DEPARTMENTCODE'=>'TIER2DEPARTMENTCODE2','JOBDESCRIPTION'=>'JOBDESCRIPTION2','EMPLOYEECLASSCODE'=>'EMPLOYEECLASSCODE2','EMPLOYEECLASS'=>'EMPLOYEECLASS2','EMPLOYEECLASSCOPE'=>'EMPLOYEECLASSCOPE2','MAILBOX'=>'MAILBOX2@example.com','MOBILE'=>'13950789091','OFFICEPHONE'=>'OFFICEPHONE2','HOMEPHONE'=>'HOMEPHONE2','FIRSTFOREIGNLANGUAGE'=>'FIRSTFOREIGNLANGUAGE2','COMPUTERLEVEL'=>'COMPUTERLEVEL2','RESIDENCE'=>'RESIDENCE2','POSTCODE'=>'POSTCODE2','IDENTITYCARDADDRESS'=>'IDENTITYCARDADDRESS2','SUPERIOR'=>'SUPERIOR2','HIGHERSUPERIOR'=>'HIGHERSUPERIOR2','OTHERNAME'=>'OTHERNAME2','EDUCATION'=>'EDUCATION2','MARRIAGE'=>'MARRIAGE2','ORGANIZATIONNO'=>'ORGANIZATIONNO2','ISVALID'=>'ISVALID2'],

            ];

            $response=['state'=>'success','result'=>$dataUsers];
        }else{
            $response = ['state'=>'failed','error_msg'=>'token is not matching!'];
        }



        return response()->json($response);
    }
    
    public function TrainCoursePlan()
    {
        $dataCourses=[
            ['COURSESOURCE'=>'HSS','COURSECODE'=>'00551100','COURSENAME'=>'COURSENAME1','PLANNUMBER'=>'006','PLANNAME'=>'PLANNAME1','PLANSTARTTIME'=>'','PLANENDTIME'=>'','TEACHERNAME'=>'Jack,Lucy','TEACHERPSNCODE'=>'201,202','STUDENTPILOTNAME'=>'Smith,Green','STUDENTPILOTPSNCODE'=>'301,302']
//            ['COURSESOURCE'=>'FCS','COURSECODE'=>'00551101','COURSENAME'=>'COURSENAME3','PLANNUMBER'=>'007','PLANNAME'=>'PLANNAME2','PLANSTARTTIME'=>'','PLANENDTIME'=>'','TEACHERNAME'=>'Mike,John','TEACHERPSNCODE'=>'203,204','STUDENTPILOTNAME'=>'Gluck,Kulj','STUDENTPILOTPSNCODE'=>'303,304'],
        ];
        $response=['state'=>'success','result'=>$dataCourses];
        return response()->json($response);
    }

    public function getcourserecord(Request $request)
    {
        $inputs = implode('',$request->all());
//        error_log($inputs);

        $response = '
        <soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
           <soap:Body>
              <ns1:sendMessageResponse xmlns:ns1="http://webservice.spring.com/">
                 <sendMessageResponseData>
                    <ifSuccess>Y</ifSuccess>
                 </sendMessageResponseData>
              </ns1:sendMessageResponse>
           </soap:Body>
        </soap:Envelope>
        ';

        return $response;
    }
}



















