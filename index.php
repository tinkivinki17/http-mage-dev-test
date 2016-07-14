<?php 
$tasks = array(
	1   => array(
		"question" => "For an attribute to be loaded on a catalog/product object, which two of the following conditions must be satisfied? (Choose two)",
		"answers"  => array(
			1 => "A. The eav_attribute table must contain a row defining the attribute's properties and its entity type.", 
			2 => "B. The attribute must have a backend model configured in the XML config.", 
			3 => "C. The attribute must be part of the attribute set pertaining to the object being loaded.", 
			4 => "D. There must be a record of the attribute on the catalog_product_super_attribute table.", 
			5 => "E. There must be a column added to the catalog_product_entity table."
		)
	),
	2   => array(
		"question" => "What class does an adminhtml grid directly extend?",
		"answers"  => array(
			1 => "A. Mage_Adminhtml_Block_Widget", 
			2 => "B. Varien_Data_Grid", 
			3 => "C. Varien_Data_Widget", 
			4 => "D. Mage_Adminhtml_Block_Template"
		)
	),
	3   => array(
		"question" => "You have a product collection and want to add a filter to get all products whose name starts with Test or whose price is 0.00. Which of the following statements would add that OR condition? M70-101",
		"answers"  => array(
			1 => "A. Option A", 
			2 => "B. Option B", 
			3 => "C. Option C", 
			4 => "D. Option D", 
			5 => "E. Option E"
		)
	),
	4   => array(
		"question" => "Which three of the following conditions are used to protect an admin route via ACL? (Choose three)",
		"answers"  => array(
			1 => "A. You have defined an ACL in your module configuration", 
			2 => "B. At least one admin role must have permission for that route", 
			3 => "C. You have extended the controller from Mage_Adminhtml_Controller_Action", 
			4 => "D. You have defined a method _isAllowed which checks the permission", 
			5 => "E. The route name must start with admin"
		)
	),
	5   => array(
		"question" => "Which table is used for calculating a new increment ID for an order?",
		"answers"  => array(
			1 => "A. sales_flat_order_increment", 
			2 => "B. eav_entity_store", 
			3 => "C. core_increment", 
			4 => "D. core_config_data"
		)
	),
	6   => array(
		"question" => " Which one of the following API methods exists in Magento?",
		"answers"  => array(
			1 => "A. catalog_category.save", 
			2 => "B. catalog_product.items", 
			3 => "C. catalog_product_attribute_set.update", 
			4 => "D. catalog_product.info"
		)
	),
	7   => array(
		"question" => "Which one of the following classes must you extend in order to implement a custom indexer?",
		"answers"  => array(
			1 => "A. Mage_Eav_Model_Indexer_Abstract", 
			2 => "B. Mage_Core_Model_Indexer_Abstract", 
			3 => "C. Mage_Index_Model_Entity_Indexer_Abstract", 
			4 => "D. Mage_Index_Model_Indexer_Abstract"
		)
	),
	8   => array(
		"question" => "Which two EAV attribute frontend_input types make use of source models? (Choose two)",
		"answers"  => array(
			1 => "A. text", 
			2 => "B. textarea", 
			3 => "C. select", 
			4 => "D. multiselect", 
			5 => "E. date", 
			6 => "F. gallery"
		)
	),
	9   => array(
		"question" => "What is the difference in the effect of calling the invoice capture () method versus the invoice pay () method?",
		"answers"  => array(
			1 => "A. No difference: pay () will always call capture ().", 
			2 => "B. pay () will trigger the payment and capture() will not.", 
			3 => "C. capture () will trigger the payment and pay () will not.", 
			4 => "D. The difference is determined by the payment method implementation."
		)
	),
	10  => array(
		"question" => "How is the sort order in which total models collect their values specified?",
		"answers"  => array(
			1 => "A. The sort order is specified in the admin configuration under Sales >'Checkout Totals Sort Order'", 
			2 => "B. The sort order is specified in the system configuration under global/sales/quote/totals/ [total_code] with <before> and <after> nodes.", 
			3 => "C. The sort order is defined by the module loading order as specified by the children of the modules/ [module_name]/depends configuration node.", 
			4 => "D. The sort order is specified by the collect method in each total model."
		)
	),
	11  => array(
		"question" => "Which method is called on a shipping carrier model to fetch a list of all available shipping methods, along with the rates associated with them, for a quote address?",
		"answers"  => array(
			1 => "A. collectShippingRates()", 
			2 => "B. getAllowedMethodsO", 
			3 => "C. getShippingRates ()", 
			4 => "D. getAvailableRates()", 
			5 => "E. collectRates()"
		)
	),
	12  => array(
		"question" => "Which one of the following EAV attribute types may be used for layered navigation in native Magento?",
		"answers"  => array(
			1 => "A. varchar", 
			2 => "B. enum", 
			3 => "C. option", 
			4 => "D. union"
		)
	),
	13  => array(
		"question" => "You are creating a custom CMS module named Achme_Cms. Which one of the following is the correct XML required to override a controller from the Mage_Cms module in your Achme_Cms module?",
		"answers"  => array(
			1 => "A. Option A", 
			2 => "B. Option B", 
			3 => "C. Option C", 
			4 => "D. Option D"
		)
	),
	14  => array(
		"question" => "Which of the following options would cause a poll/poll collection to load all entities that have been posted during April, 2011?",
		"answers"  => array(
			1 => 'A. $collection->addAttributeToFilter("date_posted", array("from" =>"2011-04-01", "to" => "2011-04-30"));',
			2 => 'B. $collection->addFieldToFilter("date_posted", array("from" =>"2011-04-01", "to" => "2011-04-30"));', 
			3 => 'C. $collection->addPostDateFilter("2011-04-01", "2011-04-30");', 
			4 => 'D. $collection->addFieldToSelect(("date_posted", array("from" => "2011-04-01", "to" => "2011-04-30"));'
		)
	),
	15  => array(
		"question" => "The final price for the product on the product view page is__________.",
		"answers"  => array(
			1 => "A. taken from the catalog_product_index_price table", 
			2 => "B. taken from the catalog_product_index_price_idx table", 
			3 => "C. taken from the catalog_product_index_price_f inal_idx table", 
			4 => "D. calculated on-the-fly on php-level", 
			5 => "E. pre-calculated in the products price attribute"
		)
	),
	16  => array(
		"question" => "Which of the following is a true statement about how Magento loads data for an EAV- based data model?",
		"answers"  => array(
			1 => "A. A data helper is used in order to properly load an object's attributes from the database.", 
			2 => "B. EAV-based data models use a different abstract resource class than other data models.", 
			3 => "C. The attribute values are loaded into an attribute collection object.", 
			4 => "D. You must always specify each of the attributes to be loaded on the model."
		)
	),
	17  => array(
		"question" => "Which one of the following class types directly charges a credit card when you capture an invoice in Magento admin?",
		"answers"  => array(
			1 => "A. Order", 
			2 => "B. Payment", 
			3 => "C. Invoice", 
			4 => "D. payment_method"
		)
	),
	18  => array(
		"question" => "Applying the shopping cart rule's action affects the quote item by setting the quote item's ___________.",
		"answers"  => array(
			1 => "A. base_price and price properties with the discounted price", 
			2 => "B. base_discount_amount and discount_amount with the discount applied to the original price", 
			3 => "C. base_row_total and row_total properties with the discounted price", 
			4 => "D. base_price_incl_tax and price_incl_tax properties with the discounted price"
		)
	),
	19  => array(
		"question" => "Which one of the following statements is true regarding Mage_Core_Block_Text_List?",
		"answers"  => array(
			1 => "A. Mage_Coce_Block_Text_List declares its own template for rendering, but the rendered template can be overridden via layout XML.", 
			2 => "B. Child blocks of Mage_Core_Block_Text_List are always rendered alphabetically by name.", 
			3 => "C. Mage_Core_Block_Text_List will always render all children automatically when it is rendered.", 
			4 => "D. Mage_Core_Block_Text_List directly extends Mage_Core_Block_Template", 
			5 => "E. In order to render, the parent block of Mage_Core_Block_Text_List must always be an output block."
		)
	),
	20  => array(
		"question" => "Which one of the following API protocols does native Magento support?",
		"answers"  => array(
			1 => "A. XmlRpc", 
			2 => "B. REST", 
			3 => "C. POST", 
			4 => "D. Open Social", 
			5 => "E. XQuery"
		)
	),
	21  => array(
		"question" => "What is the difference between the base_grand_total and grand_total attributes of the order?",
		"answers"  => array(
			1 => "A. base_grand_total is a grand total before tax is applied; grand_total is the grand total after tax is applied.", 
			2 => "B. base_grand_total is the grand total at the moment of order submission; grand_total is the grand total at the moment of order closing.", 
			3 => "C. base_grand_total is the grand total in the currency of the store where the order was submitted; grand_total is in US dollars always.", 
			4 => "D. base_grand_total is in a base currency and grand_total is in the currency of the website where the order was submitted."
		)
	),
	22  => array(
		"question" => "Which object never encapsulates any shopping cart items?",
		"answers"  => array(
			1 => "A. Mage_Checkout_Model_Cart", 
			2 => "B. Mage_Sales_Model_Quote", 
			3 => "C. Mage_Sales_Model_Quote_Address<type=shipping>", 
			4 => "D. Mage_Sales_Model_Quote_Address<type=billing>"
		)
	),
	23  => array(
		"question" => "Which of the following items is NOT utilized in Magentos implementation of EAV- based data models?",
		"answers"  => array(
			1 => "A. An entity table for storing the entities' basic information", 
			2 => "B. One or more tables to store the entities' associated pieces of information", 
			3 => "C. A two-column cross-link table to associate attribute values with a corresponding entity", 
			4 => "D. Foreign keys on each relevant table to connect relevant pieces of information at the database level", 
			5 => "E. An attribute table that defines what data (and of what type) may be stored on a particular entity"
		)
	),
	24  => array(
		"question" => "Which four of these xml elements are used in system, xml to configure a system configuration property? (Choose four)",
		"answers"  => array(
			1 => "A. backend_model", 
			2 => "B. admin_model", 
			3 => "C. frontend_model", 
			4 => "D. source_model", 
			5 => "E. source_type", 
			6 => "F. show in store"
		)
	),
	25  => array(
		"question" => "Which two of the following are supported in the native Magento API? (Choose two)",
		"answers"  => array(
			1 => "A. partial void", 
			2 => "B. partial invoice", 
			3 => "C. partial capture", 
			4 => "D. partial refund", 
			5 => "E. partial shipment"
		)
	),
	26  => array(
		"question" => "Which of the following API calls allows you to fetch the list of related products using the native Magento API?",
		"answers"  => array(
			1 => 'A. catalog_product_link.list, with arguments $type="related", $product_id"', 
			2 => 'B. catalog_product.list, with arguments $type="related", $product_id', 
			3 => 'C. catalog_product_related.list, with argument $product_id', 
			4 => 'D. catalog_product_option.list, with arguments $type="related", $product_id')
	),
	27  => array(
		"question" => "Which two of the following will return an instance of a block object?
	(Choose two)",
		"answers"  => array(
			1 => "A. Mage::getBlock('page/html_header');", 
			2 => "B. Mage::app()->createBlock('page/html_header');", 
			3 => "C. Mage::createBlock('page/html_header');", 
			4 => "D. Mage::app()->getLayout()->createBlock('page/html_header');", 
			5 => "E. Mage::getLayout()->createBlock('page/html_header');", 
			6 => "F.Mage::app()->getLayout()->createBlock('page/html_header')- >setTe mplate('page/html/header.phtml');"
		)
	),
	28  => array(
		"question" => "Inside the XML node config/global/blocks, what is the correct xpath for rewriting the catalog/product_view block?",
		"answers"  => array(
			1 => "A. catalog/rewrite/product/view", 
			2 => "B. catalog_product/rewrite/view", 
			3 => "C. catalog/product/rewrite/view", 
			4 => "D. catalog/product_view/rewrite", 
			5 => "E. catalog/rewrite/product_view", 
			6 => "F. catalog_product_view/rewrite"
		)
	),
	29  => array(
		"question" => "Which statement correctly describes order state and order status?",
		"answers"  => array(
			1 => "A. State and status are independent properties of the order.", 
			2 => "B. The status is a child of the state.", 
			3 => "C. State represents the general state of the order, while status works on item level.", 
			4 => "D. An order doesn't have a status, only a state. Status is a property of an invoice, shipment, and credit memo."
		)
	),
	30  => array(
		"question" => "Which three of the following conditions should exclude a quote item from the shipping rate calculation by a carrier model? (Choose three)",
		"answers"  => array(
			1 => 'A. $quoteItem->getFreeShipping() == true', 
			2 => 'B. $quoteltem->getProduct()->isvirtual() == true', 
			3 => 'C. $quoteltem->getWeight() > 0', 
			4 => 'D. $quoteItem->isShipSeparately() && SquoteItem->getHasChildren()', 
			5 => 'E. $quoteItem()- >getQty() < Mage::getStoreConfig("carriers/tablerate/min_shipping_qty")'
		)
	),
	31  => array(
		"question" => "What happens when you edit an existing order using the order management page?",
		"answers"  => array(
			1 => "A. A form appears that allows you to edit all information on the current order.", 
			2 => "B. A form appears that allows you to edit shipping information of the current order only.", 
			3 => "C. Depending on the order status, different editing forms appear for the current order.", 
			4 => "D. The current order is canceled and a new order is created from scratch based on the current order's data."
		)
	),
	32  => array(
		"question" => "Which two of the following methods can be used to bad an entity s data from its configured data table? (Choose two)",
		"answers"  => array(
			1 => 'A. $entityModel->loadEntity($id)', 
			2 => 'B. $entityModel->load($attributeValue, SattributeCode)', 
			3 => 'C. $entityModel->loadById($id)', 
			4 => 'D. $entityModel->loadEntity($attributeCode, $attributeValue)', 
			5 => 'E. $entityModel->load($id)'
		)
	),
	33  => array(
		"question" => "Which class is extended to render a dropdown in admin forms?",
		"answers"  => array(
			1 => "A. Mage_Adminhtml_Block_Widget", 
			2 => "B. Mage_Core_Block_Abstract", 
			3 => "C. Mage_Adminhtml_Block_Abstract", 
			4 => "D. Mage_Adminhtml_Block_Template", 
			5 => "E. Varien Data Form Abstract"
		)
	),
	34  => array(
		"question" => "Which one of the following is responsible for sending a remote request to the payment service when capturing an order?",
		"answers"  => array(
			1 => "A. Payment Info", 
			2 => "B. Order Payment", 
			3 => "C. Payment Method", 
			4 => "D. Invoice"
		)
	),
	35  => array(
		"question" => "The checkbox 'Use default value' is checked and the corresponding input field is disabled, as shown in the graphic above. How does Magento represent this state in the corresponding EAV value tables?",
		"answers"  => array(
			1 => "A. no row with a value for this store view and a row with value NULL for default", 
			2 => "B. no row with a value for this store view and a row with any value for default", 
			3 => "C. a row with value NULL for this store view and a row with value NULL for default", 
			4 => "D. a row with value NULL for this store view and a row with any value for default", 
			5 => "E. no row with a value for this store view and no row with a value for default"
		)
	),
	36  => array(
		"question" => "You want to define a list of quote object attributes that are copied to the order object when an order is placed. Which one of the following statements is true?",
		"answers"  => array(
			1 => "A. You can define this list by modifying the list of elements found in the configuration with the xpath global/fieldsets/sales_convert_quote.", 
			2 => "B. You can define this list by modifying the list of elements found in the configuration with the xpath global/sales/quote/item/product_attributes.", 
			3 => "C. You can define this list by checking the checkbox on the attribute edit page in the admin.", 
			4 => "D. You cannot modify the list of fields copied from quote to order", 
			2 => "B.cause the process is hardcoded."
		)
	),
	37  => array(
		"question" => "Which statement describes a model class that extends Mage_Core_Model_Abstract?",
		"answers"  => array(
			1 => "A. The model class consists of properties and methods for storing and manipulating data retrieved via separate resource classes responsible for database operations.", 
			2 => "B. The model class is responsible for loading the frontend layout templates and responding to page requests via its Action methods (for example, indexAction).", 
			3 => "C. The model class does not encapsulate any logic except for logic providing access to the data loaded from the database.", 
			4 => "D. The model class is primarily responsible for direct query operations such as retrieving and storing data and then rendering that data to the frontend view.")
	),
	38  => array(
		"question" => "Which of the following actions will enable logging via calls to debugDataO on a native Magento payment method model?",
		"answers"  => array(
			1 => 'A. Set the protected property $_debug of the payment model to true', 
			2 => "B. Set the config node default/payment/debug/[method code] to 1", 
			3 => "C. Call Mage::register (‘payment_method_debug_’ . [method code], true);", 
			4 => "D. Set the config node default/payment/ [method code]/debug to 1", 
			5 => "E. Call setDebug(true) on the payment method model"
		)
	),
	39  => array(
		"question" => "Which method is responsible for a full re-index in the abstract Magento indexer?",
		"answers"  => array(
			1 => "A. fullReindex()", 
			2 => "B. reindexAll()", 
			3 => "C. processEvent ()", 
			4 => "D. reindex()"
		)
	),
	40  => array(
		"question" => "Which one of the following xpaths is correct for replacing Mage_Customer_Model_Custom_Address via Mage::helper('customer/address')?",
		"answers"  => array(
			1 => "A. global/customer/helpers/address", 
			2 => "B. global/rewrite/helpers/rewrite/address", 
			3 => "C. global/helpers/customer/rewrite/address", 
			4 => "D. global/helpers/rewrite/customer_address", 
			5 => "E. global/helpers/rewrite/customer/address"
		)
	),
	41  => array(
		"question" => "Which one of the following controller classes could respond to this URL?: http://example.com/modulename/controller/index",
		"answers"  => array(
			1 => "A. Namespace_ModuleName_IndexControllet:", 
			2 => "B. Namespace_ModuleName_Controller_Controlleclnclex", 
			3 => "C. Namespace_ModuleName_Controller_lndexController", 
			4 => "D. Namespace_Modulename_ControllerController"
		)
	),
	42  => array(
		"question" => "In which table could you find the order state?",
		"answers"  => array(
			1 => "A. sales_flat_order:", 
			2 => "B. sales_flat_order_state", 
			3 => "C. sales_flat_order_status", 
			4 => "D. sales_flat_order_status_history"
		)
	),
	43  => array(
		"question" => "Which of the following block methods is the best to override when there is a need to customize how the block's html is rendered?",
		"answers"  => array(
			1 => "A. _toHtml()", 
			2 => "B. toHtml()", 
			3 => "C. setLayout()", 
			4 => "D. renderLayout()"
		)
	),
	44  => array(
		"question" => "How many items will be added to the quote after adding a configurable product to the shopping cart?",
		"answers"  => array(
			1 => "A. the number of options", 
			2 => "B. the number of options+1", 
			3 => "C. always 1", 
			4 => "D. always 2"
		)
	),
	45  => array(
		"question" => "Which of the following allows you to save a single attribute value on an EAV entity?",
		"answers"  => array(
			1 => 'A. $model->saveAttribute($attributeCode);', 
			2 => 'B. $model->save($attributeCode);', 
			3 => 'C. $model->getResource()->saveAttribute($model, $attributeCode);', 
			4 => 'D. $model->getResource()->save($model, $attributeCode);'
		)
	),
	46  => array(
		"question" => "When setData ('some', 'value') is called on an EAV entity and the entity is saved to the database, __________________.",
		"answers"  => array(
			1 => "A. the 'value' of the attribute named r some T is saved in the eav_values table", 
			2 => "B. the 'value' of the attribute named ' some' is saved in one of the entity's tables depending on its datatype (for example, entityname_varchar)", 
			3 => "C. the data will be stored in the EAV registry making ' some' 'value' available to the entity", 
			4 => "D. the 'value' of the attribute named 'some' is saved in the eav attribute values table"
		)
	),
	47  => array(
		"question" => "In which of the following integrations should you use the Magento API?",
		"answers"  => array(
			1 => "A. to send a SOAP request from Magento to a third-party system", 
			2 => "B. to receive a SOAP request from a third-party system to Magento", 
			3 => "C. to send or receive SOAP requests in Magento", 
			4 => "D. to provide tracking on the order success page"
		)
	),
	48  => array(
		"question" => "Which of the following is the default setup script class name?",
		"answers"  => array(
			1 => "A. Mage_Core_Model_Mysql4_Setup", 
			2 => "B. Mage_Core_Model_Resource_Setup_Default", 
			3 => "C. Mage_Setup_Model_Resource_Default", 
			4 => "D. Mage_Core_Model_Resource_Setup")
	),
	49  => array(
		"question" => 'In what order are the routers from the Magento core checked for a matching route? Default: Mage_Core_Controller_Varien_Router_Default CMS: Mage_Cms_Controller:_Router Standard: Mage_Core_Controller_varien_Router_Standard Admin: Mage_Core_Controller_Vatrien_Router_Admin', 
		"answers"  => array(
			1 => 'A. Admin, Standard, CMS, Default', 
			2 => 'B. Default, CMS, Standard, Admin', 
			3 => 'C. Admin, CMS, Standard, Default', 
			4 => 'D. Standard, Admin, Default, CMS'
		)
	), 
	50  => array(
		"question" => 'Which of the following will NOT generate a \<script\>tag in the output of the standard Magento page/html_head block?', 
		"answers"  => array(
			1 => 'A. Option A', 
			2 => 'B. Option B', 
			3 => 'C. Option C', 
			4 => 'D. Option D'
		)
	), 
	51  => array(
		"question" => 'A custom frontend controller will extend which one of the following classes?',
		"answers" => array(
			1 => 'A. Mage_Core_Controller_Front_Action', 
			2 => 'B. Mage_Adminhtml_Controller_Action', 
			3 => 'C. Mage_Core_controller_Varien_Front', 
			4 => 'D. Mage_Core_Controller_Abstract'
		)
	),
	52  => array(
		"question" => 'Which table stores information about the relationship between configurable products and their child products?',
		"answers" => array(
			1 => 'A. catalog_product_link', 
			2 => 'B. catalog_product_super_link', 
			3 => 'C. catalog_product_option', 
			4 => 'D. catalog_product_relation'
		)
	),
	53  => array(
		"question" => 'Which of the following lines includes a payment method object?',
		"answers" => array(
			1 => 'A. $quote->getShippingAddress()- >setPaymentMethod(isset($data[ "m ethod1 ]) ? $data[ "method"] : null); inside Mage_Checkout_Model_Type_Onepage', 
			2 => 'B. .public function setPayment(Mage_Sales_Model_Quote_Payment $payment) inside Mage_Sales_Model_Quote', 
			3 => 'C. $method = $this->getMethodInstance (); inside Mage_Sales_Model_Quote_Payment', 
			4 => 'D. $instance->setInfoInstance($this); inside Mage_Payment_Model_Info'
		)
	),
	54  => array(
		"question" => 'What type of Magento class is an API resource?',
		"answers" => array(
			1 => 'A. Controller', 
			2 => 'B. Helper', 
			3 => 'C. Model', 
			4 => 'D. Resource model'
		)
	),
	55  => array(
		"question" => 'A valid way to extend Mage_Adminhtml_Cms_PageController with the Acme Cms Adminhtml_PageController class would be to set the following configuration; Which of the following code pairs should be inserted in the  lank spots in the code shown above?',
		"answers" => array(
			1 => 'A. Mage_Adminhtml, Acme_Cms_Adminhtml', 
			2 => 'B. Mage_Adminhtml, Acme_Cms_Adminhtml_PageController', 
			3 => 'C. Mage_Adminhtml_Cms_PageController, Acme_Cms_Adminhtml', 
			4 => 'D. Mage_Adminhtml_Cms_PageContt:ollec, Acme_Cms_Adminhtml_PageController'
		)
	),
	56  => array(
		"question" => 'When you register an event observer, which two of the following pieces of information are required for it to function? (Choose two)',
		"answers" => array(
			1 => 'A. method (or function) name', 
			2 => 'B. method (or function) arguments', 
			3 => 'C. class name', 
			4 => 'D. object type (singleton, model, none, etc) ', 
			5 => 'E. call order', 
			6 => 'F. active/inactive status'
		)
	),
	57  => array(
		"question" => 'To update your order information from a third-party system using an XmlRpc call, you should _______________.',
		"answers" => array(
			1 => 'A. use the native sales_order.update API call with the url /api/xmlrpc/', 
			2 => 'B. create a custom API resource which allows you to receive XmlRpc requests', 
			3 => 'C. create a custom API adapter to receive XmlRpc requests', 
			4 => 'D. create a custom API handler to process XmlRpc requests'
		)
	),
	58  => array(
		"question" => 'Which of the following layout XML directives will set a value on a block?',
		"answers" => array(
			1 => 'A. Option A', 
			2 => 'B. Option B', 
			3 => 'C. Option C', 
			4 => 'D. Option D', 
			5 => 'E. Option E'
		)
	),
	59  => array(
		"question" => 'To implement a standard Adminhtml form for a custom data model, which two of the following must you do? (Choose two)',
		"answers" => array(
			1 => 'A. Declare your module`s block class prefix in the config.xml file. ', 
			2 => 'B. Implement a sub-class of Mage_Adminhtml_Block_widget_Form.', 
			3 => 'C. Implement a sub-class of Mage_Adminhtml_Block_Form_Abstcact.', 
			4 => 'D. Create sub-classes of Mage_Adminhtml_Block_Form_Element_Abstract for each form field to be presented.', 
			5 => 'E. Add a set of configuration values in the module`s config.xml defining the form fields to be displayed,'
		)
	),
	60  => array(
		"question" => 'Which three of the following object types will have a parent class found in the Mage_Eav module for the purposes of EAV data storage in Magento? (Choose three)',
		"answers" => array(
			1 => 'A. data model', 
			2 => 'B. data helper', 
			3 => 'C. resource model', 
			4 => 'D. resource collection', 
			5 => 'E. setup class'
		)
	),
	61  => array(
		"question" => 'Given a grid interface that extends from Mage_Adminhtml_Block_widget_Grid, which of the following methods could you override to allow data to be loaded from a custom data collection?',
		"answers" => array(
			1 => 'A. _prepareDataModel', 
			2 => 'B. _prepareCollection', 
			3 => 'C. _initDataModel', 
			4 => 'D. initGrid'
		)
	),
	62  => array(
		"question" => 'When changes are made to more than one of a collection`s items using setData ("some", "value"), which of the following methods will save the changes in the collection?',
		"answers" => array(
			1 => 'A. $collection->saveAll();', 
			2 => 'B. $collection->saveltems();', 
			3 => 'C. $collection->saveAllltems ();', 
			4 => 'D. $collection->save();'
		)
	),
	63  => array(
		"question" => 'You want to implement a custom attribute source model. Which method do you have to implement after extending Mage_Eav_Model_Entity_Attribute_Source_Abstract?',
		"answers" => array(
			1 => 'A. getOptionText()', 
			2 => 'B. getAllOptions()', 
			3 => 'C. getOptionHash()', 
			4 => 'D. getOptionld()'
		)
	),
	64  => array(
		"question" => 'How can you make a payment method store entire credit card numbers?',
		"answers" => array(
			1 => 'A. For security reasons, there are no native ways for doing that.', 
			2 => 'B. Pass the credit card number to the payment method: it will be stored automatically.', 
			3 => 'C. Change the protected property of payment method $_canSaveCc to true.', 
			4 => 'D. Configure your method to save the card number by setting 1 to the following xpath: default/payment/_NAME_/save_cc'
		)
	),
	65  => array(
		"question" => 'When the Magento configuration is being loaded, all the XML files in app/etc and the module registration files under app/etc/modules/ are loaded first. After that step, in which order are the following items loaded?
		1. configuration from the core_config_data DB table
		2. app/etc/local.xml
		3. The etc/config.xml of all active modules',
		"answers" => array(
			1 => 'A. 1, 3, 2', 
			2 => 'B. 3, 1, 2', 
			3 => 'C. 3, 2, 1', 
			4 => 'D. 1, 2, 3'
		)
	),
	66  => array(
		"question" => 'Which one of the following declares a Layout XML file?',
		"answers" => array(
			1 => 'A. Option A', 
			2 => 'B. Option B', 
			3 => 'C. Option C', 
			4 => 'D. Option D'
		)
	),
	67  => array(
		"question" => 'In order to successfully register and configure a new entity capable of being saved and loaded from the database, you must create a model and which three of the following? (Choose three)',
		"answers" => array(
			1 => 'A. a collection class', 
			2 => 'B. configuration settings in your module`s config.xml ', 
			3 => 'C. an entry in Mage: :$_registry', 
			4 => 'D. a record in the eav_entity table', 
			5 => 'E. a resource model', 
			6 => 'F. a table in the database that will store the entity s data'
		)
	),
	68  => array(
		"question" => 'What does Magento use to determine whether the automatically run upgrade scripts have been run yet?',
		"answers" => array(
			1 => 'A. The modification date on the modules "etc/config.xml file"', 
			2 => 'B. The version number (or lack thereof) stored in the core_module_version table', 
			3 => 'C. The version number (or lack thereof) stored in the core_resource table', 
			4 => 'D. A comparison of the resources that are capable of successfully loading'
		)
	),
	69  => array(
		"question" => 'Assume that PayPal has presented a new API for online purchasing that you are going to use. Which class should you extend for doing that?',
		"answers" => array(
			1 => 'A. Mage_Sales_Model_Quote_Payment', 
			2 => 'B. Mage_Payment_Model_lnfo', 
			3 => 'C. Mage_Payment_Model_Method_Abstract', 
			4 => 'D. Mage_Sales_Model_Order_Payment'
		)
	),
	70  => array(
		"question" => 'Which two public methods must be implemented in a functional custom shipping method directly extending Mage_Shipping_Model_Carrier_Abstract and also implementing Mage_Shipping_Model_Carriec_Interface? (Choose two)',
		"answers" => array(
			1 => 'A. collectRates()', 
			2 => 'B. getAllowedMethods()', 
			3 => 'C. isTrackingAvailable()', 
			4 => 'D. isFixed()', 
			5 => 'E. getConfigDatat()', 
			6 => 'F. checkAvailablesnipCountries()'
		)
	),
	71  => array(
		"question" => 'The initial call to ______________ will create and return an instance of the specified class. Subsequent calls to this method during the same execution cycle will return the same class instance as opposed to creating a new one.',
		"answers" => array(
			1 => 'A. Mage::getResourceModel("namespace/modulename");', 
			2 => 'B. Mage::getInstance ("namespace/modulename");', 
			3 => 'C. Mage::getModel("modulename/modelname") ;', 
			4 => 'D. Mage::getSingleton("modulename/modelname");'
		)
	),
	72  => array(
		"question" => 'You want to display a grid for a custom collection. After extending Mage_Adminhtml_Block_widget_Grid, which two of these methods should you implement? (Choose two)',
		"answers" => array(
			1 => 'A. _getCollection()', 
			2 => 'B. _prepareCollection() ', 
			3 => 'C. _prepareColumns()', 
			4 => 'D. toHtml()', 
			5 => 'E. render()'
		)
	),
	73  => array(
		"question" => 'What is the basic class/interface for every model observer class?',
		"answers" => array(
			1 => 'A. Mage_Model_Config_Observer', 
			2 => 'B. Mage_Core_Model_Event_Observer_Abstract', 
			3 => 'C. Mage_Core_Model_Event_Observer_Interface', 
			4 => 'D. There is no required inheritance.', 
			5 => 'E. Varien_Object'
		)
	),
	74  => array(
		"question" => 'You want to filter a product collection so that it will return only SKUs 12 and 123. You will use a call to $collection->addFieldToFilter("sku", ____________); Two of the following arrays could be used to complete that call correctly. Which two? (Choose two)',
		"answers" => array(
			1 => 'A. arrayCsku => 12, "sku" => 123)', 
			2 => 'B. array(array("eq" => 12), array("eq" => 123))', 
			3 => 'C. array(12 => true, 123 => true) ', 
			4 => 'D. array(12, 123)', 
			5 => 'E. array(array("int" => 12), array("int" => 123))'
		)
	),
	75  => array(
		"question" => 'How can you update a third-party system with every new order created in Magento?',
		"answers" => array(
			1 => 'A. Use the native sales_order_update API call.', 
			2 => 'B. Use a sales_order_place_after API call.', 
			3 => 'C. Create an observer in Magento on the sales_order_place_after event.', 
			4 => 'D. Customize the third-party system to listen to Magento sales_order_place_after event.'
		)
	),
	76  => array(
		"question" => 'Which of the following xpaths defines the correct XML structure for informing Magento that your module has install scripts?',
		"answers" => array(
			1 => 'A. global/resources/etc/setup/<script_directory_name>/module', 
			2 => 'B. system/database/resources/<script_directory_name>/setup/module', 
			3 => 'C. global/resources/<script_directory_name>/setup/module', 
			4 => 'D. database/action/scripts/<script_directory_name>'
		)
	),
	77  => array(
		"question" => 'You have used the "refresh" action on the cache management page for the block html cache type. Which of the following types of cache record would be cleared?',
		"answers" => array(
			1 => 'A. all cache records containing HTML code', 
			2 => 'B. items for block classes extending Mage_Core_Block_Template only', 
			3 => 'C. items having at least one of the tags found in the configuration under the xpath global/cache/types/block_html/tags', 
			4 => 'D. block class items with expired lifetime'
		)
	),
	78  => array(
		"question" => 'Which of the following methods will force an EAV resource collection model to include an attribute in its result set?',
		"answers" => array(
			1 => 'A. addAttributeToSelect($attribute);', 
			2 => 'B. getResource()->addAttribute($attribute);', 
			3 => 'C. addFieldToSelect($attribute);', 
			4 => 'D. getSelect()->from(" " , $attribute);', 
			5 => 'E. addAttributeToCollection($attribute);'
		)
	),
	79  => array(
		"question" => 'Assume you have product with qty in stock=1, and two people are trying to buy it at the same time. Which of the following statements is true?',
		"answers" => array(
			1 => 'A. Only one is able to add the product to the shopping cart. That person will be able to buy the product.', 
			2 => 'B. Only the person who starts checkout first will be able to buy the product.', 
			3 => 'C. Only the person who passes the payment step first will be able to buy the product.', 
			4 => 'D. Both persons can go to the Place Order step, but the one who places the order first will get the product.', 
			5 => 'E. Both persons will be able to complete the checkout, because both have local copies of the available inventory.'
		)
	),
	80  => array(
		"question" => 'In which config areas are layout files declared? (Choose two)',
		"answers" => array(
			1 => 'A. <admin>',
			2 => 'B. <adminhtml>',
			3 => 'C. <default>',
			4 => 'D. <frontend>',
			5 => 'E. <global>'
		)
	),
	81  => array(
		"question" => 'To register a new API resource, what should you do?',
		"answers" => array(
			1 => 'A. Register your new resource in config.xml in the node global/api/[module name]/resources.', 
			2 => 'B. Create etc/api.xml and register your resource in the api/resources node.', 
			3 => 'C. Go to the System/Web services/API Resources management page, and add a new resource from there.', 
			4 => 'D. Create an etc/resources.xml config file and register your resource in the api/resources node.'
		)
	),
	82  => array(
		"question" => 'Two modules, Foo and Moo, both rewrite the catalog/product model,but only the Moo module`s rewrite is being used. Both modules Foo and Moo reside in the community code pool. Which two approaches allow the functionality from both classes to be used? (Choose two)',
		"answers" => array(
			1 => 'A. Copy Foo_Model_Product to the local code pool.', 
			2 => 'B. Copy Moo_Model_Product to the local code pool and merge the logic from Foo_Model_Product into it.', 
			3 => 'C. Copy Moo_Model_Product to the local code pool and make it extend Foo_Model_Product, making sure the logic of both classes does not conflict.', 
			4 => 'D. Copy Moo_Model_Product to the local code pool.', 
			5 => 'E. Change the rewrite directive of the Moo module to rewrite foo/product instead of catalog/product.'
		)
	),
	83  => array(
		"question" => 'In admin, a shipment can be created ____________.',
		"answers" => array(
			1 => 'A. only after the whole order is invoiced', 
			2 => 'B. only after at least one item is invoiced', 
			3 => 'C. even before an invoice is created', 
			4 => 'D. only after tracking number(s) are specified'
		)
	),
	84  => array(
		"question" => 'How can you restrict access to a custom API resource?',
		"answers" => array(
			1 => 'A. Only by creating a new role under System/Web Services/Roles', 
			2 => 'B. By setting up an ACL in etc/api.xml and creating a new role for it in System/Web Services/Roles', 
			3 => 'C. Only by extending Mage_Api_Controller_Action and overriding the _isAllowed method', 
			4 => 'D. By setting up an ACL in etc/adminhtml.xml and creating a new role in System/Permissions/Roles'
		)
	),
	85  => array(
		"question" => 'What must be done to allow a third-party system to access the Magento API?',
		"answers" => array(
			1 => 'A. Run a login call with username/password, and use the returned session_id for every request.', 
			2 => 'B. Get a token previously generated in Magento admin.', 
			3 => 'C. Run an authenticate call with username/password; the call will set up a session automatically.', 
			4 => 'D. Register the remote IP address in the api/allowed_ips/ [system name] node.', 
			5 => 'E. Use a secure certificate, with public/private keys, and get a private key installed inside Magento.'
		)
	),
	86  => array(
		"question" => 'Which one of the following statements is true regarding layout update handles?',
		"answers" => array(
			1 => 'A. Layout update handles must always match a module_controller_action pattern such as catalog_product_view.', 
			2 => 'B. There may never be more than one layout update handle per request.', 
			3 => 'C. Layout update handles are declared at any level of the layout XML hierarchy.', 
			4 => 'D. A layout update handle may be specified as a string argument when calling loadLayout ().'
		)
	),
	87  => array(
		"question" => 'Which three of the following will return an instance of a resource model? (Choose three)',
		"answers" => array(
			1 => 'A. Mage::rgetResourceModel("customer/customer");', 
			2 => 'B. Mage::getResourceSingleton("customer/customer");', 
			3 => 'C. Mage::getModel("customer/customer")->getResourceModel();', 
			4 => 'D. Mage::rgetResourceModel("customer/customer")->getlnstance();', 
			5 => 'E. Mage::getModel("customer/customer")->getResource();', 
			6 => 'F. Mage::getResourceModel("customer/customer")->getResource();'
		)
	),
	88  => array(
		"question" => 'By enabling Flat catalog, you will ____________.',
		"answers" => array(
			1 => 'A. speed up performance on the frontend ', 
			2 => 'B. speed up saving product on the backend', 
			3 => 'C. simplify the product import process', 
			4 => 'D. speed up loading product on the backend'
		)
	),
	89  => array(
		"question" => 'Which of the following payment methods payment actions creates an invoice during the "place order" step?',
		"answers" => array(
			1 => 'A. Mage_Payment_Model_Method_Abstract::ACTION_AUTHORIZE', 
			2 => 'B. Mage_Payment_Model_Method_Abstract::ACTION_CAPTURE', 
			3 => 'C. Mage_Payment_Model_Method_Abstract:: ACTION_AUTHORIZE_CAPTURE', 
			4 => 'D. Mage_Payment_Model_Method_Abstract::ACTION_INVOICE'
		)
	),
	90  => array(
		"question" => 'Which model is responsible for calculating the taxes for the selected shipping rate?',
		"answers" => array(
			1 => 'A. shipping/rate_result', 
			2 => 'B. shipping/total_tax', 
			3 => 'C. tax/sales_total_quote_tax', 
			4 => 'D. the concrete shipping carrier model implementation', 
			5 => 'E. shipping/rate_request'
		)
	),
	91  => array(
		"question" => 'A native Magento EAV entity will use_____________.',
		"answers" => array(
			1 => 'A. A single table with separate columns for each data type (for instance, decimal, text, varchar, etc.)', 
			2 => 'B. A single table with separate columns for all data types used by the entity', 
			3 => 'C. A separate table for each data type (for instance, decimal, text, varchar, etc.)', 
			4 => 'D. A separate table for each data type in addition to a flat data table with separate columns to store values for each data type used by the entity'
		)
	),
	92  => array(
		"question" => 'In which order are the following methods executed after Mage_Core_Model_Abstract::save () is called? 1 - Mage_Core_Model_Abstract::_beforeSave() 2 - Mage_Core_Model_Abstract::_afterSave() 3 -  age_Core_Model_Mysq14_Abstract::_beforeSave() 4 - Mage_Core_Model_Mysq14_Abstract::_afterSave() 5 - Mage Core Model Abstract::afterCommitCallback()',
		"answers" => array(
			1 => 'A. 1, 2, 3, 4, 5', 
			2 => 'B. 1, 3, 2, 4, 5', 
			3 => 'C. 1, 3, 4, 2, 5', 
			4 => 'D. 3, 1, 4, 2, 5'
		)
	),
	93  => array(
		"question" => 'Which of the following node names may be used inside the setup resource declaration to utilize a custom setup class?',
		"answers" => array(
			1 => 'A. resourceModel', 
			2 => 'B. resourceClass', 
			3 => 'C. setupClass', 
			4 => 'D. class'
		)
	),
	94  => array(
		"question" => 'How does Magento store comments regarding different entities (invoice, credit memo, shipment)?',
		"answers" => array(
			1 => 'A. Each comment is a separate entity with a type attribute which identifies the owner of the comment. All comments are stored in one sales_comment table.', 
			2 => 'B. Comments to invoice, credit memo and shipment are different entities stored in the different tables.', 
			3 => 'C. All comments belong directly to the order, and are stored in the sales_flat_order_comments table.', 
			4 => 'D. Each comment is an attribute of the appropriate entity (invoice, credit memo, shipment).'
		)
	),
	95  => array(
		"question" => 'Which file path correctly identifies the location of a modules install/upgrade scripts inside the primary module directory?',
		"answers" => array(
			1 => 'A. sql/<setup_resource_name>/', 
			2 => 'B. var/scripts/', 
			3 => 'C. scripts/', 
			4 => 'D. <setup_resource_name>/'
		)
	),
	96  => array(
		"question" => 'Given an EAV-based data model whose data is stored in the table foo_entity, in which table would you find the values for an attribute of the varchar type?',
		"answers" => array(
			1 => 'A. foo_entity_attribute_storage', 
			2 => 'B. foo_entity_varchar', 
			3 => 'C. entity_attribute_varchar', 
			4 => 'D. foo_entity'
		)
	),
	97  => array(
		"question" => 'A customer bought two items but wants to cancel one. Which option enables the administrator of the site to edit the quantity while the invoice is being captured in the admin area?',
		"answers" => array(
			1 => 'A. In the System Configuration, under the Sales section, set "Allow partial invoice" to "true".', 
			2 => 'B. In the payment method, set the $_canCapturePartial protected variable to true.', 
			3 => 'C. There are no native ways to do this: override the sales/order/invoice/view/items.phtml template.', 
			4 => 'D. In the configuration node, set default/payment/{METHOD_NAME}/allow_partial_invoice to 1.'
		)
	),
	98  => array(
		"question" => 'Which one of the following classes does NOT exist in Magento?',
		"answers" => array(
			1 => 'A. Mage_Adminhtml_Block_Widget_Form_Element_Abstract', 
			2 => 'B. Mage_Adminhtml_Block_Widget_Form', 
			3 => 'C. Mage_Adminhtml_Block_Widget_Form_Container ', 
			4 => 'D. Mage_Adminhtml_Block_Widget_Form_Element', 
			5 => 'E. Varien Data Form Element Abstract'
		)
	),
	99  => array(
		"question" => 'What do you need to do to implement a completely new Web Service protocol in Magento?',
		"answers" => array(
			1 => 'A. Create your own adapter and controller.', 
			2 => 'B. Create your own API resource.', 
			3 => 'C. Create a new API helper.', 
			4 => 'D. Create a new model extended from Mage_Api_Model_Abstract.'
		)
	), 
	100 => array(
		"question" => 'What is the xpath to the list of product types?',
		"answers" => array(
			1 => 'A. catalog/product/type', 
			2 => 'B. global/catalog/product/type', 
			3 => 'C. default/catalog/product/type', 
			4 => 'D. It depends on the product type.'
		)
	), 
	101 => array(
		"question" => 'For which two of the following composite products could the options be shipped separately on the frontend using "Checkout with multiple addresses"? (Choose two)',
		"answers" => array(
			1 => 'A. configurable physical product', 
			2 => 'B. bundle product consisting of physical products', 
			3 => 'C. grouped product consisting of physical products ', 
			4 => 'D. bundle product consisting of virtual products', 
			5 => 'E. grouped product consisting of virtual products'
		)
	), 
	102 => array(
		"question"  => 'Assume you added a product with custom options to the shopping cart. Where will the data for the custom options be stored persistently?', 
		"answers" => array(
			1 => 'A. in the sales_flat_quote table, as a serialized string in a text field', 
			2 => 'B. in the session, as a serialized array', 
			3 => 'C. in a separate table, sales_flat_quote_item_option', 
			4 => 'D. Magento doesn`t store persistent data about custom options; only thenew price and new SKU are stored.'
		)
	)
);

$answers = array(
	1 => array(1, 3),
	2 => array(1),
	3 => array(1),
	4 => array(1, 3, 4),
	5 => array(2),
	6 => array(4),
	7 => array(4),
	8 => array(3, 4),
	9 => array(3),
	10 => array(1),
	11 => array(5),
	12 => array(3),
	13 => array(1),
	14 => array(2),
	15 => array(4),
	16 => array(2),
	17 => array(4),
	18 => array(2),
	19 => array(3),
	20 => array(1),
	21 => array(4),
	22 => array(2),
	23 => array(3),
	24 => array(1, 4),
	25 => array(2, 5),
	26 => array(1),
	27 => array(4, 6),
	28 => array(5),
	29 => array(2),
	30 => array(1, 2),
	31 => array(4),
	32 => array(2, 5),
	33 => array(5),
	34 => array(3),
	35 => array(2),
	36 => array(1),
	37 => array(1),
	38 => array(4),
	39 => array(2),
	40 => array(3),
	41 => array(4),
	42 => array(1),
	43 => array(1),
	44 => array(4),
	45 => array(3),
	46 => array(2),
	47 => array(2),
	48 => array(4),
	49 => array(1),
	50 => array(3),
	51 => array(1),
	52 => array(2),
	53 => array(3),
	54 => array(3),
	55 => array(1),
	56 => array(1, 3),
	57 => array(1),
	58 => array(4),
	59 => array(1, 2),
	60 => array(3, 4, 5),
	61 => array(2),
	62 => array(4),
	63 => array(2),
	64 => array(3),
	65 => array(3),
	66 => array(4),
	67 => array(2, 5, 6),
	68 => array(3),
	69 => array(3),
	70 => array(1, 2),
	71 => array(4),
	72 => array(2, 3),
	73 => array(4),
	74 => array(2, 4),
	75 => array(3),
	76 => array(3),
	77 => array(3),
	78 => array(1),
	79 => array(2),
	80 => array(2, 4),
	81 => array(2),
	82 => array(2, 3),
	83 => array(3),
	84 => array(2),
	85 => array(1),
	86 => array(4),
	87 => array(1, 2, 5),
	88 => array(1),
	89 => array(3),
	90 => array(3),
	91 => array(3),
	92 => array(3),
	93 => array(2, 4),
	94 => array(2),
	95 => array(1),
	96 => array(2),
	97 => array(2),
	98 => array(1),
	99 => array(1),
	100 => array(2),
	101 => array(2, 3),
	102 => array(3)
);

function shuffle_assoc($list) { 
	if (!is_array($list)) return $list; 

	$keys = array_keys($list); 
	shuffle($keys); 
	$random = array(); 
	foreach ($keys as $key) 
		$random[$key] = $list[$key]; 

	return $random; 
}

require_once(getcwd() . '/body.php');
