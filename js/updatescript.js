var app = new Vue({
	el:'#app',
	data:{
		client_matter,
		id:'',
		role:'',
		sponser:'',
		cross_border_deal:'',
		agent_contacts:[],
		agent_contact_template:{'nameId':'agentname','titleId':'agenttitle','phoneId':'agentphone','emailId':'agentemail','addressId':'agentaddress'},
		borrower_contacts:[],
		borrower_contact_template:{'nameId':'borrowername','titleId':'borrowertitle','phoneId':'borrowerphone','emailId':'borroweremail','addressId':'borroweraddress'},
		lookup_contacts:[],
		lookup_contact_template:{'nameId':'lookupname','phoneId':'lookupphone','emailId':'lookupemail'},
		clientus_contacts:[],
		clientus_contact_template:{'nameId':'clientusname','phoneId':'clientusphone','emailId':'clientusemail'},
		clientforeign_contacts:[],
		clientforeign_contact_template:{'nameId':'clientforeignname','phoneId':'clientforeignphone','emailId':'clientforeignemail'},
		opposingus_contacts:[],
		opposingus_contact_template:{'nameId':'opposingusname','phoneId':'opposingusphone','emailId':'opposingusemail'},
		opposingforeign_contacts:[],
		opposingforeign_contact_template:{'nameId':'opposingforeignname','phoneId':'opposingforeignphone','emailId':'opposingforeignemail'},
		clientname : '',
		client_number :'',
		pepper_finance : '',
		closing_date : '',
		description : '',
		lender_side : '',
		sponser_name:'',
		deal_country : '',
		deal_industry : '',
		type_of_deal : '',
		collateral : '',
		distribution : '',
		name_agent : '',
		borrower_name : '',
		borrower_is_public_company : '',
		lookup_firm_name : '',
		client_us_state : '',
		client_us_firm_name : '',
		client_foriegn_country : '',
		client_foriegn_firm_name : '',
		opposing_us_state : '',
		opposing_us_firm_name : '',
		opposing_foriegn_country : '',
		opposing_foriegn_firm_name : '',

	},
	methods:{
		addAggentContact:function(dataObj) {
			var self = this;
	
			agent_contact = {};
			totalCount = self.agent_contacts.length+1;

			agent_contact['name']		= {'id':self.agent_contact_template['nameId']+totalCount , 	'value':dataObj ? dataObj['name'] : ''};
			agent_contact['title'] 		= {'id':self.agent_contact_template['titleId']+totalCount , 'value':dataObj ? dataObj['title'] : ''};
			agent_contact['phone']		= {'id':self.agent_contact_template['phoneId']+totalCount , 'value':dataObj ? dataObj['phone'] : ''};
			agent_contact['email']		= {'id':self.agent_contact_template['emailId']+totalCount , 'value':dataObj ? dataObj['email'] : ''};
			agent_contact['address'] 	= {'id':self.agent_contact_template['addressId']+totalCount ,'value':dataObj ? dataObj['address'] : ''};
			self.agent_contacts.push(agent_contact);
			// console.log(self.agent_contacts);
		},
		removeAggentContact:function(index) {
			var	self = this;
			self.agent_contacts.splice(index,1);
		},
		addBorrowerContact:function(dataObj) {
			var self = this;
			borrower_contact = {};
			totalCount = self.borrower_contacts.length+1;
			borrower_contact['name']		={'id':self.borrower_contact_template['nameId']+totalCount , 'value':dataObj ? dataObj['name'] : ''};
			borrower_contact['title'] 		= {'id':self.borrower_contact_template['titleId']+totalCount , 'value':dataObj ? dataObj['title'] : ''};
			borrower_contact['phone']		= {'id':self.borrower_contact_template['phoneId']+totalCount , 'value':dataObj ? dataObj['phone'] : ''};
			borrower_contact['email']		= {'id':self.borrower_contact_template['emailId']+totalCount , 'value':dataObj ? dataObj['email'] : ''};
			borrower_contact['address'] 	= {'id':self.borrower_contact_template['addressId']+totalCount , 'value':dataObj ? dataObj['address'] : ''};
			self.borrower_contacts.push(borrower_contact);
			// console.log(self.borrower_contacts);
		},
		removeBorrowerContact:function(index) {
			var	self = this;
			self.borrower_contacts.splice(index,1);
		},
		addLookupContact:function(dataObj) {
			var self = this;
			lookup_contact = [];
			totalCount = self.lookup_contacts.length+1;

			lookup_contact['name']		={'id':self.lookup_contact_template['nameId']+totalCount , 'value':dataObj ? dataObj['name'] : ''};
			lookup_contact['title'] 	= {'id':self.lookup_contact_template['titleId']+totalCount , 'value':dataObj ? dataObj['title'] : ''};
			lookup_contact['phone']		= {'id':self.lookup_contact_template['phoneId']+totalCount , 'value':dataObj ? dataObj['phone'] : ''};
			lookup_contact['email']		= {'id':self.lookup_contact_template['emailId']+totalCount , 'value':dataObj ? dataObj['email'] : ''};
			lookup_contact['address'] 	= {'id':self.lookup_contact_template['addressId']+totalCount , 'value':dataObj ? dataObj['address'] : ''};
			self.lookup_contacts.push(lookup_contact);
			// console.log(self.lookup_contacts);
		},
		removeLookupContact:function(index) {
			var	self = this;
			self.lookup_contacts.splice(index,1);
		},
		addClientusContact:function(dataObj) {
			var self = this;
			clientus_contact = {};
			totalCount = self.clientus_contacts.length+1;
			clientus_contact['name']		={'id':self.clientus_contact_template['nameId']+totalCount , 'value':dataObj ? dataObj['name'] : ''};
			clientus_contact['title'] 		= {'id':self.clientus_contact_template['titleId']+totalCount , 'value':dataObj ? dataObj['title'] : ''};
			clientus_contact['phone']		= {'id':self.clientus_contact_template['phoneId']+totalCount , 'value':dataObj ? dataObj['phone'] : ''};
			clientus_contact['email']		= {'id':self.clientus_contact_template['emailId']+totalCount , 'value':dataObj ? dataObj['email'] : ''};
			clientus_contact['address'] 	= {'id':self.clientus_contact_template['addressId']+totalCount , 'value':dataObj ? dataObj['address'] : ''};
			self.clientus_contacts.push(clientus_contact);
			// console.log(self.lookup_contacts);
		},
		removeClientusContact:function(index) {
			var	self = this;
			self.clientus_contacts.splice(index,1);
		},
		addClientforeignContact:function(dataObj) {
			var self = this;
			clientforeign_contact = {};
			totalCount = self.clientforeign_contacts.length+1;
			clientforeign_contact['name']		={'id':self.clientforeign_contact_template['nameId']+totalCount , 'value':dataObj ? dataObj['name'] : ''};
			clientforeign_contact['title'] 		= {'id':self.clientforeign_contact_template['titleId']+totalCount , 'value':dataObj ? dataObj['title'] : ''};
			clientforeign_contact['phone']		= {'id':self.clientforeign_contact_template['phoneId']+totalCount , 'value':dataObj ? dataObj['phone'] : ''};
			clientforeign_contact['email']		= {'id':self.clientforeign_contact_template['emailId']+totalCount , 'value':dataObj ? dataObj['email'] : ''};
			clientforeign_contact['address'] 	= {'id':self.clientforeign_contact_template['addressId']+totalCount , 'value':dataObj ? dataObj['address'] : ''};
			self.clientforeign_contacts.push(clientforeign_contact);
			// console.log(self.lookup_contacts);
		},
		removeClientforeignContact:function(index) {
			var	self = this;
			self.clientforeign_contacts.splice(index,1);
		},
		addOpposingusContact:function(dataObj) {
			var self = this;
			opposingus_contact = {};
			totalCount = self.opposingus_contacts.length+1;
			opposingus_contact['name']		={'id':self.opposingus_contact_template['nameId']+totalCount , 'value':dataObj ? dataObj['name'] : ''};
			opposingus_contact['title'] 		= {'id':self.opposingus_contact_template['titleId']+totalCount , 'value':dataObj ? dataObj['title'] : ''};
			opposingus_contact['phone']		= {'id':self.opposingus_contact_template['phoneId']+totalCount , 'value':dataObj ? dataObj['phone'] : ''};
			opposingus_contact['email']		= {'id':self.opposingus_contact_template['emailId']+totalCount , 'value':dataObj ? dataObj['email'] : ''};
			opposingus_contact['address'] 	= {'id':self.opposingus_contact_template['addressId']+totalCount , 'value':dataObj ? dataObj['address'] : ''};
			self.opposingus_contacts.push(opposingus_contact);
			// console.log(self.lookup_contacts);
		},
		removeOpposingusContact:function(index) {
			var	self = this;
			self.opposingus_contacts.splice(index,1);
		},
		addOpposingforeignContact:function(dataObj) {
			var self = this;
			opposingforeign_contact = {};
			totalCount = self.opposingforeign_contacts.length+1;
			opposingforeign_contact['name']		={'id':self.opposingforeign_contact_template['nameId']+totalCount , 'value':dataObj ? dataObj['name'] : ''};
			opposingforeign_contact['title'] 		= {'id':self.opposingforeign_contact_template['titleId']+totalCount , 'value':dataObj ? dataObj['title'] : ''};
			opposingforeign_contact['phone']		= {'id':self.opposingforeign_contact_template['phoneId']+totalCount , 'value':dataObj ? dataObj['phone'] : ''};
			opposingforeign_contact['email']		= {'id':self.opposingforeign_contact_template['emailId']+totalCount , 'value':dataObj ? dataObj['email'] : ''};
			opposingforeign_contact['address'] 	= {'id':self.opposingforeign_contact_template['addressId']+totalCount , 'value':dataObj ? dataObj['address'] : ''};
			self.opposingforeign_contacts.push(opposingforeign_contact);
			// console.log(self.lookup_contacts);
		},
		removeOpposingforeignContact:function(index) {
			var	self = this;
			self.opposingforeign_contacts.splice(index,1);
		},
		submit:function () {
			var self = this;
			var data = {
				'client_matter' : self.client_matter,
				'id' : self.id,
				'clientname' : self.clientname, 
				'client_number' : self.client_number, 
				'pepper_finance' : self.pepper_finance, 
				'closing_date' : self.closing_date, 
				'description' : self.description, 
				'role':self.role,
				'lender_side' : self.lender_side, 
				'sponser' : self.sponser,
				'sponser_name' : self.sponser_name,
				'cross_border_deal' : self.cross_border_deal,
				'deal_country' : self.deal_country, 
				'deal_industry' : self.deal_industry, 
				'type_of_deal' : self.type_of_deal, 
				'collateral' : self.collateral, 
				'distribution' : self.distribution, 
				'name_agent' : self.name_agent, 
				'aggent_data': self.getAggentData(),
				'borrower_name' : self.borrower_name, 
				'borrower_is_public_company' : self.borrower_is_public_company, 
				'borrower_data' : self.getBorrowerData(),
				'lookup_firm_name' : self.lookup_firm_name,
				'lookup_data' :self.getLookupData(), 
				'client_us_state' : self.client_us_state, 
				'client_us_firm_name' : self.client_us_firm_name, 
				'client_us_data' : self.getClientUsData(),
				'client_foriegn_country' : self.client_foriegn_country, 
				'client_foriegn_firm_name' : self.client_foriegn_firm_name, 
				'client_foriegn_data' :self.getClientForiegnData(),
				'opposing_us_state' : self.opposing_us_state, 
				'opposing_us_firm_name' : self.opposing_us_firm_name, 
				'opposing_us_data' : self.getOpposingUsData(),
				'opposing_foriegn_country' : self.opposing_foriegn_country, 
				'opposing_foriegn_firm_name' : self.opposing_foriegn_firm_name, 
				'opposing_foriegn_data' : self.getOpposingForiegnData(),
			};
			$.post("update.php", data, function(result){
		        response = JSON.parse(result);
		       	if (response.status == 200) {
		       		alert('success');
		       		window.location = "index.php";
		       	}
		       	else{
		       		alert('error');
		       	}
		    });
		},
		getAggentData:function () {
			var self = this;
			var data = [];
			self.agent_contacts.forEach(function (item) {
				var temp = {};
				temp['name'] = item.name.value;
				temp['title'] = item.title.value;
				temp['phone'] = item.phone.value;
				temp['email'] = item.email.value;
				temp['address'] = item.address.value;
				data.push(temp);
			});
			return data;
		},
		getBorrowerData:function () {
			var self = this;
			var data = [];
			self.borrower_contacts.forEach(function (item) {
				var temp = {};
				temp['name'] = item.name.value;
				temp['title'] = item.title.value;
				temp['phone'] = item.phone.value;
				temp['email'] = item.email.value;
				temp['address'] = item.address.value;
				data.push(temp);
			});
			return data;
		},
		getLookupData:function () {
			var self = this;
			var data = [];
			self.lookup_contacts.forEach(function (item) {
				var temp = {};
				temp['name'] = item.name.value;
				temp['phone'] = item.phone.value;
				temp['email'] = item.email.value;
				temp['address'] = item.address.value;
				data.push(temp);
			});
			return data;
		},
		getClientUsData:function () {
			var self = this;
			var data = [];
			self.clientus_contacts.forEach(function (item) {
				var temp = {};
				temp['name'] = item.name.value;
				temp['phone'] = item.phone.value;
				temp['email'] = item.email.value;
				temp['address'] = item.address.value;
				data.push(temp);
			});
			return data;
		},
		getClientForiegnData:function () {
			var self = this;
			var data = [];
			self.clientforeign_contacts.forEach(function (item) {
				var temp = {};
				temp['name'] = item.name.value;
				temp['phone'] = item.phone.value;
				temp['email'] = item.email.value;
				temp['address'] = item.address.value;
				data.push(temp);
			});
			return data;
		},
		getOpposingUsData:function () {
			var self = this;
			var data = [];
			self.opposingus_contacts.forEach(function (item) {
				var temp = {};
				temp['name'] = item.name.value;
				temp['phone'] = item.phone.value;
				temp['email'] = item.email.value;
				temp['address'] = item.address.value;
				data.push(temp);
			});
			return data;
		},
		getOpposingForiegnData:function () {
			var self = this;
			var data = [];
			self.opposingforeign_contacts.forEach(function (item) {
				var temp = {};
				temp['name'] = item.name.value;
				temp['phone'] = item.phone.value;
				temp['email'] = item.email.value;
				temp['address'] = item.address.value;
				data.push(temp);
			});
			return data;
		},
		getQueryString : function ( field, url ) {
			var href = url ? url : window.location.href;
			var reg = new RegExp( '[?&]' + field + '=([^&#]*)', 'i' );
			var string = reg.exec(href);
			return string ? string[1] : null;
		}


	},
	mounted:function() {
		var self =this;
		self.id = self.getQueryString('id');
		$.post("getdata.php",{'id':self.id}, function(result){
			var data = JSON.parse(result);
			console.log(data);
			console.log(data.closing_date['date']);
			var date = new Date(data.closing_date['date']);
			// console.log(date);
			$('#closing_date').datepicker("update", date );
			self.client_matter = data.client_matter
			self.clientname = data.client_name;
			self.client_number = data.client_number;
			self.pepper_finance = data.pepper_finance_team_members.split(',');
			self.closing_date = data.closing_date['date'];
			self.description = data.description;
			self.role = data.role;
			self.lender_side = data.lender_side;
			self.sponser = data.is_sponser;
			self.sponser_name=data.sponser_name;
			self.cross_border_deal = data.is_cross_border_deal;
			self.deal_country = data.country.split(',');
			self.deal_industry = data.industry;
			self.type_of_deal = data.type_of_deal.split(',');
			self.collateral = data.collateral.split(',');
			self.distribution = data.distribution;
			self.name_agent = data.agent_name;
			self.borrower_name = data.borrower_name;
			self.borrower_is_public_company = data.is_public_company;
			self.lookup_firm_name = data.lookup_firm_name;
			self.client_us_state = data.client_us_state;
			self.client_us_firm_name = data.client_us_firm_name;
			self.client_foriegn_country = data.client_foreign_country;
			self.client_foriegn_firm_name = data.client_foreign_firm_name;
			self.opposing_us_state = data.opposing_us_state;
			self.opposing_us_firm_name = data.opposing_us_firm_name;
			self.opposing_foriegn_country = data.opposing_foreign_country;
			self.opposing_foriegn_firm_name = data.opposing_foreign_firm_name;
			data.agent_data.forEach(function (item) {
				self.addAggentContact(item);
			});
			data.borrower_data.forEach(function (item) {
				self.addBorrowerContact(item);
			});
			data.lookup_data.forEach(function (item) {
				self.addLookupContact(item);
			});
			data.client_us_data.forEach(function (item) {
				self.addClientusContact(item);
			});
			data.client_foreign_data.forEach(function (item) {
				self.addClientforeignContact(item);
			});
			data.opposing_us_data.forEach(function (item) {
				self.addOpposingusContact(item);
			});
			data.opposing_foreign_data.forEach(function (item) {
				self.addOpposingforeignContact(item);
			});

		});
	}


});




var getQueryString = function ( field, url ) {
	var href = url ? url : window.location.href;
	var reg = new RegExp( '[?&]' + field + '=([^&#]*)', 'i' );
	var string = reg.exec(href);
	return string ? string[1] : null;
};