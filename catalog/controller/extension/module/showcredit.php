<?php
class ControllerExtensionModuleShowcredit extends Controller {
	public function index() {
			$status = $this->config->get('module_showcredit_status')&&$this->customer->isLogged();

		if ($status) {
			$this->load->language('extension/module/showcredit');

			$data['heading_title'] = $this->language->get('heading_title');
		
			$data['balance'] = $this->currency->format( $this->customer->getBalance(),$this->session->data['currency']);

			return $this->load->view('extension/module/showcredit', $data);
			
		}
	}
}