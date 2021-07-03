<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contract</title>
</head>
<body>
    <center><h2>Work For Hire Contract</h2></center>
    <p>
    This Work , <font style="color:red">{{$contractdata->project_name}}</font> (the Project Name)  for Hire Contract (the “Contract”) is entered into <font style="color:red">{{$contractdata->startdate}}</font> (the “Effective Date”),  and between <font style="color:red">{{$contractdata->enddate}}</font> (the “End Date”) with total members <font style="color:red">{{$contractdata->project_member}}</font>.

<p>
1.	Ownership of Work Product. As a result of this Agreement, the Service Provider will create specific deliverables, which shall be referred to as “Work Product”, including, but not limited to, documents, presentations, reports and the like, physical and/or electronic. All Work Product shall be owned by the Client. The Service Provider does not maintain any rights to this Work Product and shall turn over all Work Product upon the termination of this Contract.
</p>
<p>
2.	Term. This Contract shall commence upon the Effective Date, as stated above, and will continue until <font style="color:red">{{$contractdata->enddate}}</font> (the “End Date”).
</p>
<p>
3.	Service Provider Relationship. The Parties agree that the Service Provider is providing the Services under this Contract and acting as an independent contractor and not as an employee. This Contract does not create a partnership, joint venture, or any other fiduciary relationship between the Client and the Service Provider. 
</p>
<p>
4.	Confidentiality. During the course of this Contract, it may be necessary for the Client to share proprietary information, including trade secrets, industry knowledge, and other confidential information, to the Service Provider in order for the Service Provider to complete the Services. The Service Provider will not share any of this proprietary information at any time. The Service Provider also will not use any of this proprietary information for the Service Provider’s personal benefit at any time. This section remains in full force and effect even after termination of the Contract by it’s natural termination or the early termination by either Party.
</p>
<p>
5.	Termination. This Contract may be terminated at any time by either Party upon written notice to the other Party. The Client will be responsible for payment of all Services performed up to the date of termination, except for in the case of the Service Provider’s breach of this Contract, where the Service Provider fails to cure such breach upon reasonable notice. 
Upon termination of the Contract, the Service Provider shall return all the Client’s content, materials, and all Work Product to the Client at its earliest convenience, but in no event beyond thirty (30) days after the date of termination.
</P>
<p>
6.	Representations and Warranties. Both Parties represent that they are fully authorized to enter into this Contract. The performance and obligations of either Party will not violate or infringe upon the rights of any third party or violate any other agreement between the Parties, individually, and any other person, organization, or business or any law or governmental regulation.
</p>
<p>
7.	Indemnity. The Parties each agree to indemnify and hold harmless the other Party, its respective affiliates, officers, agents, employees, and permitted successors and assigns against any and all claims, losses, damages, liabilities, penalties, punitive damages, expenses, reasonable legal fees and costs of any kind or amount whatsoever, which result from the negligence of or breach of this Contract by the indemnifying Party, its respective successors and assigns that occurs in connection with this Contract. This section remains in full force and effect even after termination of the Contract by its natural termination or the early termination by either Party.
</p>
<p>
8.	Limitation of Liability. UNDER NO CIRCUMSTANCES SHALL EITHER PARTY BE LIABLE TO THE OTHER PARTY OR ANY THIRD PARTY FOR ANY DAMAGES RESULTING FROM ANY PART OF THIS CONTRACT SUCH AS, BUT NOT LIMITED TO, LOSS OF REVENUE OR ANTICIPATED PROFIT OR LOST BUSINESS, COSTS OF DELAY OR FAILURE OF DELIVERY, WHICH ARE NOT RELATED TO OR THE DIRECT RESULT OF A PARTY’S NEGLIGENCE OR BREACH.
</p>
<br><br>
<p>
Client
Signed:		_____________________________________<br><br>
Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 		<font style="color:red">{{$contractdata->contactname}}</font><br><br>
Date  &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 		{{$contractdata->startdate}}<br><br>
</P>

<p>
Service Provider
Signed:		_____________________________________<br><br>
Name&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:  		<font style="color:red">Spring Arts</font><br><br>
Date&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;: 	 	{{$contractdata->startdate}}

</P>
    </p>
</body>
</html>