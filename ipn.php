<?php 
$postData = file_get_contents("php://input");
//        $postData = '<PaymentNotification Stage="false">
//  <MerchantReference>100004117</MerchantReference>
//  <TransactionType>PAYMENT</TransactionType>
//  <TransactionState>SUCCESSFUL</TransactionState>
//  <ResultCode>00</ResultCode>
//  <ResultMessage>Successful</ResultMessage>
//  <PayUReference>1167986976014</PayUReference>
//  <Basket>
//    <Description>Store Order Number:100004117</Description>
//    <AmountInCents>100</AmountInCents>
//    <CurrencyCode>ZAR</CurrencyCode>
//    <Products/>
//  </Basket>
//  <PaymentMethodsUsed>
//    <Eft BankName="ABSA" AmountInCents="100" Reference="CUMVSIUPFG" AccountNumber="4077920871" BranchNumber="632005" AccountType="Cheque" TimeLimit="168" Currency="ZAR"/>
//  </PaymentMethodsUsed>
//  <IpnExtraInfo>
//    <ResponseHash></ResponseHash>
//  </IpnExtraInfo>
//</PaymentNotification>';
		var_dump ($postData);
/* 		ob_start();
		echo "***RAW POST <br /><br />";
		var_dump($postData);
		print "<br /><br />";
		echo "***GET <br /><br />";
		var_dump($_GET);
		print "<br /><br />";
		echo "***POST <br /><br />";
		var_dump($_POST);
		$bufferOutput = ob_get_contents();
		ob_end_clean();
		
		$returnData = json_decode(json_encode(simplexml_load_string($postData)),true);
		
//		if(isset($returnData['PaymentMethodsUsed']['Eft'])) {
//			$orderId = $this->getRequest()->getParam('orderId');
            $orderId = $returnData['MerchantReference'];
			if(isset($orderId) && !empty($orderId) && is_numeric($orderId)) {
				$payuReference = $returnData['PayUReference'];				
			}			
//		} */