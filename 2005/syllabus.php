<html>
<head>
<title>cs 262a fall 2005, syllabus</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>

{% include header.html %}
We will read and discuss 2-4 papers per week.&nbsp; Many of the
papers for the class will be available either on-line, or as handouts
in a previous class. <br><br>
<table cellpadding="2" border="1" style="color:#000033">
<tr bgcolor="#000033"><td><font color="white">Date</font></td> <td><font color="white">Readings</font></td></tr>
    <tr>
      <td colspan="2" bgcolor="yellow" valign="top">
      <div align="center">
      <p><b>&nbsp;Part 1: &nbsp;Basics and Classics</b></p>
      </div>
      </td>
    </tr>
    <tr>
      <td align="left" width="70">Tu 8/30</td>
      <td><b><a
 href="unix.pdf">The UNIX
Time-Sharing System</a> </b> <br>
Dennis M. Richie and Ken Thompson <br>
(New electronic version)&nbsp;</td>
    </tr>
    <tr>
      <td align="left" width="70">Th 9/1</td>
      <td>Entrance Exam</td>
    </tr>
    <tr>
      <td> Tu 9/6 
      </td>
      <td><b><a
 href="SystemR.pdf">A
History
and Evaluation of System R</a></b> <br>
Donald D. Chamberlin, Morton A. Astrahan, Michael W.
Blasgen, James N. Gray, W. Frank King, Bruce G. Lindsay, Raymond
Lorie, James W. Mehl, Thomas G. Price, Franco Putzolu, Patricia
Griffiths
Selinger, Mario Schkolnick, Donald R. Slutz, Irving L. Traiger,
Bradford
W. Wade and Robert A. Yost<br><br>
      <b>Anatomy of a Database System, Sections 1-3</b>
     Hellerstein & Stonebraker (in textbook).  <font color="#ff0000"><i><b>No summary required</b></i></font><br><br>
      Optional Reading: <b><a href="http://portal.acm.org/citation.cfm?id=320473.320476">The Design and Implementation of Ingres</a></b><br>
Michael Stonebraker, Eugene Wong, Peter Kreps and Gerald Held.<br><br>
      </td>
    </tr>
    <tr>
      <td>Th 9/9<br>
      </td>
      <td><b><a
 href="ccandr.pdf">Concurrency
Control and Recovery</a></b>, M. Franklin, in "The Computer Science and
Engineering Handbook", 1997. <i><b>Read only sections 1 through 3.1.1</b></i>
(although we will cover all of
it eventually). <font color="#ff0000"><i><b>No summary required</b></i></font>.<br>
      <hr size="2" width="100%"> Optional: Pages 159-173 of Gray and
Reuter's <b><i>Transaction Processing: Concepts and Techniques</i></b>,
Morgan-Kaufmann, 1993. Available outside 685 Soda.
      <br>
      </td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="yellow" valign="top">
      <div align="center">
      <p><b>Part 2: Volatile Storage<br>
      </b></p>
      </div>
      </td>
    </tr>
    <tr>
      <td valign="top">Tu 9/13
      </td>
      <td valign="top"><b><a
 href="mach-vm.pdf">Machine-Independent
Virtual Memory Management for Paged Uniprocessor
and Multiprocessor Architectures</a></b><br>
Rashid, Tavanian, Young, Golub, Baron, Black, Bolosky and Chew
      </td>
    </tr>
    <tr>
      <td>Th 9/15 </td>
      <td>
	  <b><a href="appelli.pdf">Virtual Memory Primitives for User Programs</a></b><br>Appel and Li<br>
 <b><a href="lrvm.pdf">Lightweight
Recoverable Virtual Memory</a> </b> <br>
M. Satyanarayanan, Henry H. Mashburn, Puneet Kumar, David C. Steere,
and James J. Kistler
      </td>
    </tr>
    <tr>
      <td>Tu 9/20 
      <td><b><a href="http://www.multicians.org/multics-vm.html">The
Multics Virtual Memory: Concepts and Design</a></b><br>
Bensoussan, Clingen and Daley<br>
      </td>
    </tr>
    <tr>
      <td> Th 9/22 </td>
      <td>
      <div
      align="left"><b><a
      href="http://research.microsoft.com/research/pubs/view.aspx?type=Technical%20Report&id=142">The
      Five-Minute Rule Ten Years Later, and Other Computer Storage
      Rules of Thumb</a></b><br>
Graefe and Gray (in textbook)<br><br>

Optional Reading: <b><a
 href="dbmin.pdf">An
Evaluation of Buffer Management Strategies for Relational Database
Systems</a></b> <br>
Hong-Tai Chou and David J. DeWitt<br><br>

FYI on interesting DB-centric page replacement policies: 
<a href="http://citeseer.ist.psu.edu/16869.html">LRU-K</a>,
<a href="http://portal.acm.org/citation.cfm?id=672996">2Q</a>, 
<a href="http://www.usenix.org/events/fast04/tech/full_papers/bansal/bansal.pdf">CAR</a>.

      <hr size="2" width="100%"><b>
<a href="hc.pdf">Application-Controlled Physical Memory using External Page-Cache
Management</a> </b>
 <br>
Harty and Cheriton<br>
      </div>
      </td>
    </tr>
    <tr>
    <td> Tu 9/27</td>
    <td> <b><a href="http://berkeley.intel-research.net/troscoe/cs262a/2003-xensosp.pdf">Xen and the Art of Virtualization</a></b><br>P. Barham, B. Dragovic, K Fraser, S. Hand, T. Harris, A. Ho, R. Neugebauer, I. Pratt and A. Warfield.</a></b> 
	<br>
	<b><a href="http://berkeley.intel-research.net/troscoe/cs262a/vmm-ukernel-hotos-final.pdf">Are Virtual Machine Monitors Microkernels Done Right?</a></b> S. Hand, A. Warfield, K. Fraser, E. Kotsovinos, D. Magenheimer.
	<br>
	<font color="red">
	(likely but tentative: Steve Hand guest lecture).
	</font>
       </td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="yellow" valign="top">
      <div align="center">
      <p><b>Part 3: Persistent Storage</b></p>
      </div>
      </td>
    </tr>
<tr>
<td>Th 9/29</td>
<td>
<b>Principles of Transaction-Oriented Database Recovery</b> <i>Computing
Surveys</i> 15(4): 287-317 (1983). In textbook, read Sections 1 and 2.
<br>Theo Haerder &amp; Andreas Reuter<br><br>
      <b><a
 href="http://db.cs.berkeley.edu/papers/ERL-M87-06.pdf">The
Design of the POSTGRES Storage Manager</a></b><br>
M. Stonebraker </td>
</tr>

    <tr>
      <td> Tu 10/4 
</td>
      <td><b><a
 href="FFS.pdf">A Fast File
System for UNIX</a> </b> <br>
McKusick, Joy, Leffler and Fabry <br>
      <b><a href="LFS.pdf">The
Design and Implementation of a
Log-Structured File System</a> </b> <br>
Rosenblum and Ousterhout (229K)&nbsp; </td>
    </tr>
    <tr>
       <td> Th 10/6 </td>
      <td> <b><a
 href="Aries.pdf">ARIES: A
Transaction Recovery Method
Supporting Fine-Granularity Locking and Partial Rollbacks Using
Write-ahead Logging</a></b>, <a
 href="http://www.cs.berkeley.edu/%7Ebrewer/cs262/Aries2.pdf">2-up
version</a><br>
C. Mohan et al. (in Red Book) </td>
    <tr>
      <td>Tu 10/11</td>
      <td>Logging and recovery wrapup.</td> </tr>
    <tr>
      <td>Th 10/13</td>
      <td> <b><a
 href="http://www.acm.org/pubs/articles/journals/tocs/1996-14-1/p108-wilkes/p108-wilkes.pdf">The
HP AutoRAID Hierarchical Storage System</a> </b> [My temporary <a
 href="http://www.cs.berkeley.edu/%7Ebrewer/cs262/AutoRAID.pdf">local
copy</a>, <a
 href="http://www.cs.berkeley.edu/%7Ebrewer/cs262/AutoRAID-2up.pdf">2-up
version</a>] <br>
Wilkes, Golding, Staelin and Sullivan&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="yellow" valign="top">
      <div align="center">
      <p><b>Part 4: Locking and Consistency<br>
      </b></p>
      </div>
      </td>
    </tr>
    <tr>
      <td>Tu 10/18 </td>
      <td valign="top"><b><a
 href="http://www.cs.berkeley.edu/%7Ebrewer/cs262/Mesa.pdf">Experience
with Processes
and Monitors in Mesa</a></b><br>
Butler Lampson and David Redell<br>
      </td>
    </tr>
    <tr>
      <td>Th 10/20 </td>
      <td> <b>Granularity of Locks and Degrees of Consistency in a
Shared Database</b><br>
Gray et al. (Section I-II, pp. 173-193 in red book, <font color="red">copies
outside 685</font>)
      <hr>Optional reading: <b><a
 href="http://research.microsoft.com/%7Eadya/pubs/icde00.pdf">
Generalized Isolation Levels</a> </b><br>
Atul Adya, Barbara Liskov, Patrick O'Neil. </td>
    </tr>
    <tr>
      <td>Tu 10/25</td>
      <td> <b><a
 href="http://www.cs.berkeley.edu/%7Ebrewer/cs262/kung.pdf">On
Optimistic Methods for Concurrency
Control</a></b><br>
Kung and Robinson
      <hr> <b><a
 href="http://www.cs.berkeley.edu/%7Ebrewer/cs262/ConcControl.pdf">Concurrency
Control
Performance Modeling: Alternatives and Implications</a></b><br>
Agrawal et al. </td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="yellow" valign="top">
      <div align="center">
      <p><b>Part 5: Query Processing<br>
      </b></p>
      </div>
      </td>
    </tr>
    <tr>
      <td valign="top">Th 10/27<br>
      </td>
      <td> <b><a
 href="graefe.pdf"> Query
Evaluation Techniques for Large Databases</a> </b>, Intro and Section
1 ONLY -- <font color="red">no summary required</font><br>
Goetz Graefe
      <hr> <b><a
 href="http://www.cs.berkeley.edu/%7Ebrewer/cs262/Shapiro-join.pdf">Join
Processing in Database
Systems with Large Main Memories</a></b>[in Red Book]<br>
L. D. Shapiro </td>
    </tr>
    <tr>
      <td>Tu 11/1</td>
      <td> <b><a
 href="http://www.cs.berkeley.edu/%7Ebrewer/cs262/AccessPath.pdf">Access
Path Selection in a
Relational Database Management System [all new version!]</a></b> [in
Red Book]<br>
Selinger, Astrahan, Chamberlain, Lorie &amp; Price
<hr>
<b><a href="http://citeseer.ist.psu.edu/cache/papers/cs/22828/http:zSzzSzwww.cs.brandeis.eduzSz~cs227bzSzpaperszSzextensible-volcano-icde93.pdf/graefe93volcano.pdf">The Volcano Optimizer Generator: Extensibility and Efficient Search</a></b> Graefe and McKenna.
<hr> <i>Optional reading:</i>
<b><a href="http://portal.acm.org/citation.cfm?id=50204">
Grammar-like Functional Rules for Representing Query Optimization Alternatives.</a></b>  G. Lohman [in Red Book]

</td>
    </tr>
    <tr>
      <td>Th 11/3 </td>
      <td><b><a
 href="http://www.cs.berkeley.edu/%7Ebrewer/cs262/Volcano.pdf">Encapsulation
of Parallelism in the
Volcano Query Processing System</a></b><br>
Goetz Graefe
      <hr><b><a
 href="http://db.cs.berkeley.edu/papers/sigmod00-eddy.pdf"> Eddies:
Continuously Adaptive Query Processing</a> </b><br>
Joseph M. Hellerstein and Ron Avnur </td>
    </tr>
    <tr>
      <td>Tu 11/8</td>
      <td><b><a href="http://pdos.csail.mit.edu/papers/click:tocs00/paper.pdf">The
Click Modular Router</a> </b><br>
Kohler, Morris, Chen, Jannotti and Kaashoek<br>
      </td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="yellow" valign="top">
      <div align="center">
      <p><b>Part 6: Threads and Scheduling<br>
      </b></p>
      </div>
      </td>
    </tr>
    <tr>
       <td>Th 11/10</td>
	   <td><b><a href="http://berkeley.intel-research.net/troscoe/cs262a/adya_cooperative_2002.pdf">Cooperative Task Management without Manual Stack Management</a></b>.  <br>
	   Adya, Howell, Theimer, Bolosky, and Douceur.
<hr>
		<b><a href="http://capriccio.cs.berkeley.edu/pubs/capriccio-sosp-2003.pdf">Capriccio: Scalable Threads for Internet Services</a></b>.  <br>von Behren,
   Condit, Zhou, Necula, and Brewer.
<hr>
		<i>Optional reading:</i> <b><a href="http://berkeley.intel-research.net/troscoe/cs262a/lauer_duality_1979.pdf">On the Duality of Operating System Structures.</a></b>  <br>Lauer and Needham.
<hr>
		<i>Optional reading:</i> <b><a href="http://berkeley.intel-research.net/troscoe/cs262a/ousterhout_threads_1996.pdf">John Ousterhout's 1996 slides on "Why threads are a bad idea"</a></b>
	   </td>
    </tr>
    <tr>
       <td>Tu 11/15</td>
	   <td><a href="lottery-osdi94.pdf"><b>Lottery Scheduling: Flexible Proportional-Share Resource Management</b></a><br> Waldspurger and Wiehl </td>
    </tr>
    <tr>
       <td>Th 11/17</td>
	   <td>
	   <a href="http://berkeley.intel-research.net/troscoe/cs262a/marsh-threads.pdf"><b>First class user-level threads.</b></a><br>
	   B. D. Marsh, M. L. Scott, T. J. LeBlanc, and
	   E. P. Markatos. <hr>
      <b><a
           href="http://berkeley.intel-research.net/troscoe/cs262a/sched_act.pdf ">Scheduler
           Activations</a></b><br>
           Anderson, Bershad, Lazowska and Levy
<hr>
		<i>Optional reading:</i>
	   <a href="http://berkeley.intel-research.net/troscoe/cs262a/clark-upcalls.pdf"><b> The Structuring of Systems Using Upcalls.</b></a> <br>
	   Clark
    </tr>
    <tr>
      <td colspan="2" bgcolor="yellow">
      <div align="center">
      <p><b> Part 7: Networking</b> </p>
      </div>
      <p> </p>
      </td>
    </tr>
    <tr>
      <td valign="top"><br>Tu 11/22</td>
      <td valign="top"><a
 href="http://www.cs.berkeley.edu/%7Ebrewer/cs262/congavoid.ps"><b>Congestion
Avoidance
and Control</b></a> <a
 href="http://www.cs.berkeley.edu/%7Ebrewer/cs262/cong-avoid.pdf">[PDF]</a>
      <br>
Van Jacobson
      <hr><b><a
 href="http://www.cs.washington.edu/homes/savage/papers/CCR99.pdf"> TCP
Congestion Control with a Misbehaving Receiver </a> </b><br>
Savage, Cardwell, Wetherall and T. Anderson </td>
    </tr>
    <tr>
      <td>Th 11/24</td>
      <td><b>Thanksgiving holiday.</b> </td>
    </tr>
    <tr>
      <td>Tu 11/29 <br></td>
      <td><b><a href="http://berkeley.intel-research.net/troscoe/cs262a/multiplexing89.pdf">Layered multiplexing considered harmful</a></b><br>D. Tennenhouse<br>
	  <hr>
	  <b> <a href="http://berkeley.intel-research.net/troscoe/cs262a/CT90-alf.pdf">Architectural Considerations for a New Generation of Protocols"</a></b><br>
	  Clark and Tennenhouse
      </td>
    </tr>
    <tr>
       <td> Thu 12/1</td>
	   <td><b><a href="http://berkeley.intel-research.net/troscoe/cs262a/isca92.ps">Active Messages: A Mechanism for Integrated Communication and Control</a><b><br> von Eicken, Culler, Goldstein, and Schauser<br>
	   <hr>
	   <b><a href="http://berkeley.intel-research.net/troscoe/cs262a/unet.ps">U-Net: A User-Level Network Interface for Parallel and Distributed
	      Computing</a></b><br>
          <font color="red">If you have problems with the postscript:</font> <a
    href="http://delivery.acm.org/10.1145/150000/140382/p256-von_eicken.pdf?key1=140382&key2=4153803311&coll=GUIDE&dl=GUIDE&CFID=61389249&CFTOKEN=38353536">PDF
    from the ACM</a><br>
		  Basu, Buch, Vogels, and von Eicken
    </tr>
    <tr>
      <td colspan="2" bgcolor="yellow" valign="top">
      <div align="center">
      <p><b>Part 8: Wind Up</b></p>
      </div>
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top;">Tu 12/6</td>
      <td style="vertical-align:
      top;"><b><a
      href="http://db.cs.berkeley.edu/papers/sosp05-p2.pdf">Implementing
      Declarative Overlays</a>.  Loo et al.</b>
    </tr>
    <tr>
      <td>Th 12/8</td>
      <td valign="top">Final Lecture<br>
      <b><a
 href="http://research.microsoft.com/%7Elampson/33-Hints/Acrobat.pdf">Hints
for Computer System Design</a></b><br>
Butler Lampson. [No summary required] 
<hr>
     <b><a href="ftp://ftp.research.microsoft.com/pub/tr/tr-99-50.pdf">What Next?  A Dozen Information-Technology Research Goals</a></b>.  Jim Gray.  [No summary required] </td>
    </tr>
  </tbody>

    </td>
    </td>
   </tr>
  </table>
{% include footer.html %}
</body>
</html>
