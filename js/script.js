var app = new Vue({
	el:'#app',
	data:{
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
	},
	methods:{
		addAggentContact:function() {
			var self = this;
			agent_contact = {};
			totalCount = self.agent_contacts.length+1;
			agent_contact['nameId'] = self.agent_contact_template['nameId']+totalCount;
			agent_contact['titleId'] = self.agent_contact_template['titleId']+totalCount;
			agent_contact['phoneId'] = self.agent_contact_template['phoneId']+totalCount;
			agent_contact['emailId'] = self.agent_contact_template['emailId']+totalCount;
			agent_contact['addressId'] = self.agent_contact_template['addressId']+totalCount;
			self.agent_contacts.push(agent_contact);
			// console.log(self.agent_contacts);
		},
		removeAggentContact:function(index) {
			var	self = this;
			self.agent_contacts.splice(index,1);
		},
		addBorrowerContact:function() {
			var self = this;
			borrower_contact = {};
			totalCount = self.borrower_contacts.length+1;
			borrower_contact['nameId'] = self.borrower_contact_template['nameId']+totalCount;
			borrower_contact['titleId'] = self.borrower_contact_template['titleId']+totalCount;
			borrower_contact['phoneId'] = self.borrower_contact_template['phoneId']+totalCount;
			borrower_contact['emailId'] = self.borrower_contact_template['emailId']+totalCount;
			borrower_contact['addressId'] = self.borrower_contact_template['addressId']+totalCount;
			self.borrower_contacts.push(borrower_contact);
			// console.log(self.borrower_contacts);
		},
		removeBorrowerContact:function(index) {
			var	self = this;
			self.borrower_contacts.splice(index,1);
		},
		addLookupContact:function() {
			var self = this;
			lookup_contact = {};
			totalCount = self.lookup_contacts.length+1;
			lookup_contact['nameId'] = self.lookup_contact_template['nameId']+totalCount;
			lookup_contact['titleId'] = self.lookup_contact_template['titleId']+totalCount;
			lookup_contact['phoneId'] = self.lookup_contact_template['phoneId']+totalCount;
			lookup_contact['emailId'] = self.lookup_contact_template['emailId']+totalCount;
			lookup_contact['addressId'] = self.lookup_contact_template['addressId']+totalCount;
			self.lookup_contacts.push(lookup_contact);
			// console.log(self.lookup_contacts);
		},
		removeLookupContact:function(index) {
			var	self = this;
			self.lookup_contacts.splice(index,1);
		},
		addClientusContact:function() {
			var self = this;
			clientus_contact = {};
			totalCount = self.clientus_contacts.length+1;
			clientus_contact['nameId'] = self.clientus_contact_template['nameId']+totalCount;
			clientus_contact['titleId'] = self.clientus_contact_template['titleId']+totalCount;
			clientus_contact['phoneId'] = self.clientus_contact_template['phoneId']+totalCount;
			clientus_contact['emailId'] = self.clientus_contact_template['emailId']+totalCount;
			clientus_contact['addressId'] = self.clientus_contact_template['addressId']+totalCount;
			self.clientus_contacts.push(clientus_contact);
			// console.log(self.lookup_contacts);
		},
		removeClientusContact:function(index) {
			var	self = this;
			self.clientus_contacts.splice(index,1);
		},
		addClientforeignContact:function() {
			var self = this;
			clientforeign_contact = {};
			totalCount = self.clientforeign_contacts.length+1;
			clientforeign_contact['nameId'] = self.clientforeign_contact_template['nameId']+totalCount;
			clientforeign_contact['titleId'] = self.clientforeign_contact_template['titleId']+totalCount;
			clientforeign_contact['phoneId'] = self.clientforeign_contact_template['phoneId']+totalCount;
			clientforeign_contact['emailId'] = self.clientforeign_contact_template['emailId']+totalCount;
			clientforeign_contact['addressId'] = self.clientforeign_contact_template['addressId']+totalCount;
			self.clientforeign_contacts.push(clientforeign_contact);
			// console.log(self.lookup_contacts);
		},
		removeClientforeignContact:function(index) {
			var	self = this;
			self.clientforeign_contacts.splice(index,1);
		},
		addOpposingusContact:function() {
			var self = this;
			opposingus_contact = {};
			totalCount = self.opposingus_contacts.length+1;
			opposingus_contact['nameId'] = self.opposingus_contact_template['nameId']+totalCount;
			opposingus_contact['titleId'] = self.opposingus_contact_template['titleId']+totalCount;
			opposingus_contact['phoneId'] = self.opposingus_contact_template['phoneId']+totalCount;
			opposingus_contact['emailId'] = self.opposingus_contact_template['emailId']+totalCount;
			opposingus_contact['addressId'] = self.opposingus_contact_template['addressId']+totalCount;
			self.opposingus_contacts.push(opposingus_contact);
			// console.log(self.lookup_contacts);
		},
		removeOpposingusContact:function(index) {
			var	self = this;
			self.opposingus_contacts.splice(index,1);
		},
		addOpposingforeignContact:function() {
			var self = this;
			opposingforeign_contact = {};
			totalCount = self.opposingforeign_contacts.length+1;
			opposingforeign_contact['nameId'] = self.opposingforeign_contact_template['nameId']+totalCount;
			opposingforeign_contact['titleId'] = self.opposingforeign_contact_template['titleId']+totalCount;
			opposingforeign_contact['phoneId'] = self.opposingforeign_contact_template['phoneId']+totalCount;
			opposingforeign_contact['emailId'] = self.opposingforeign_contact_template['emailId']+totalCount;
			opposingforeign_contact['addressId'] = self.opposingforeign_contact_template['addressId']+totalCount;
			self.opposingforeign_contacts.push(opposingforeign_contact);
			// console.log(self.lookup_contacts);
		},
		removeOpposingforeignContact:function(index) {
			var	self = this;
			self.opposingforeign_contacts.splice(index,1);
		},

	},
	mounted:function() {
		var self =this;
		self.addAggentContact();
		self.addBorrowerContact();
		self.addLookupContact();
		self.addClientusContact();
		self.addClientforeignContact();
		self.addOpposingusContact();
		self.addOpposingforeignContact();
	}

});