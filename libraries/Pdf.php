<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class pdf {
    
    function pdf()
    {
        $CI = & get_instance();
        log_message('Debug', 'mPDF class is loaded.');
    }
 
    function load($param=NULL)
    {
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
         
        if ($params == NULL)
        {
            $param = '"en-GB-x","A4","","",0,0,0,0,0,0';         
        }
         
        return new mPDF($param);
    }
	function makepdf($html,$title){
		
		
		$filename=$title.time();
		$pdfFilePath = FCPATH."/downloads/reports/$filename.pdf";
		$data['page_title'] = 'Report'; // pass data to the view			 
			if (file_exists($pdfFilePath) == FALSE)
			{
				   
				ini_set('memory_limit','2024M'); 
				$data=array();
				$CI = & get_instance();
				$header = $CI->load->view('setting/header', $data,true);		
				//$this->load->library('pdf');
				$pdf = $this->pdf();							
				$pdf->SetHTMLHeader($header, 'O', true);				
				$pdf->WriteHTML($html);
				$pdf->Output($pdfFilePath, 'I');
			}
			$base=base_url(); 
			redirect("$base/downloads/reports/$filename.pdf"); 
	}
}