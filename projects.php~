<html>
<head>
<title>cs 262a fall 2005, suggested projects</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>

{% include header.html %} 
<p>You are encouraged to design your own project.  To get you
thinking, here are some ideas we had; not surprisingly, they tend to
focus on projects we are already working on, including our joint
project, <a
href="http://p2.berkeley.intel-research.net">P2</a>. However, you are
by no means required to work on things we're interested in!</p>

<p>This list is a work in progress; feel free to talk with Joe or Mothy for
advice or further suggestions.</p>

<h2>P2 Engine Architecture</h2>
<ul>
<li><b>Parallel dataflow execution using lightweight threads.</b>
P2 is a system for rapidly implementing and instantiating overlay
networks.  Network properties are specified declaratively as
distributed continuous queries over network state, which are then
compiled into a graph of software dataflow elements which pass tuples
between themselves on each node, and send and receive tuples over the
network.  P2 is currently implemented using a single-threaded
event-driven select loop to implement asynchronous I/O.   Some 
consequences of this are that P2 cannot take advantage of multiple
processors, and it is cumbersome to implement long-running I/O
operations (such as disk access or invoking a separate database
process) in the middle of executing a P2 rule. 

This project investigates the issues in using the Cappricio
lightweight threads package as a better basis of the P2 runtime.
Cappricio is attractive because supports very large numbers of
coroutine-like threads, with lightweight synchronization primitives.
However, it also presents challenges, for example: efficiently
scheduling P2's dataflow graph based on ordering contraints imposed by
language semantics, and resource control to ensure that long-running
CPU-intensive dataflow invocations do not starve or hold up the rest
of the system.  

This project assumes fairly strong C++/STL skills and a working
knowledge of asynchronous I/O programming on Unix.
</li>
<li><b>Coordination extensions to P2</b>.
In the P2 declarative overlay system, actions (insertion in a table,
sending a message, etc.) occur as a result of single "events" (arrival
of a message, timers, etc.).   While sufficient to implement overlay
networks remarkably concisely, this "single event => action" model
does make it somewhat cumbersome to express certain kinds of
short-term "stateful" behavior, such as "perform action X when events
Y and Z are seen within 3 seconds of each other", etc. 

This project is about combining P2's powerful datalog evaluation with
a more sophisticated event coordination facility, and evaluating what
the payoff is in terms of system complexity, simplicity of expression,
and runtime efficiency, as compared with implementing such stateful
constructs in P2's existing query languages.  The idea is to combine
some of facilities of modern publish-subscribe systems with
distributed relational query processing. 

<li><b>Parallel Dataflow with Overlays</b>. Partitioned-parallel
dataflow execution is a good way to scale up cluster-based data
processing.  It has been used successfully in databases since the
1980's (see the DeWitt/Gray paper on "Parallel Database Systems" in
the red book, the Graefe paper to be read on 11/3, as well as the work
on FLuX
[<a href="http://db.cs.berkeley.edu/papers/icde03-fluxlb.pdf">2</a>]).
Recently this idea has proven very important in web search engines;
Google calls
it <a
href="http://labs.google.com/papers/mapreduce-osdi04.pdf">MapReduce</a>,
and it underlies much of their batch processing.  Traditionally,
parallel dataflow assumes a very reliable set of "fate-shared"
machines.  As clusters scale out, they are beginning to look more and
more like distributed systems.  Investigate the use of overlay
technologies in a high-performance parallel dataflow environment for
clusters.</li>
</ul>


<h2>Networking</h2>
<ul>
<li><b>Declarative Protocol Implementation</b>.  P2 was design as a
system for constructing overlay networks; however, one can certainly
imagine using it to implement the core functionality of Internet
routing.  Consider a declarative implementation of Internet protocols
like BGP, or even TCP/IP.  Can these be made efficient in P2?  Does
the declarative perspective help to prove properties about
correctness?  Does the flexibility of the language and the dataflow
system enable new optimizations to be defined and exploited?  Some
related work here
includes <a
href="http://pdos.csail.mit.edu">Click</a>, <a
href="http://www.xorp.org">XORP</a>,
and <a
href="http://nms.lcs.mit.edu/~feamster/papers/logic-sigcomm2003.pdf">logics
for routing</a>.</li>

<li><b>Ephemeral, Customized Overlay Networks</b>.  P2 allows overlay
networks to be concisely specified, and constructed on the fly.  This
raises the possibility of customized, "ephemeral" overlays that are
set up for a specific task (e.g. disseminating a command with a
randomized gossip algorithm, constructing a multicast/aggregation tree
with controlled fanout/in, producing a random-neighbor DHT for
secure routing, etc.) This project would investigate the
feasibility and motivation for such "ECO" networks: how quickly can
overlays be brought up and torn down, and can you demonstrate the
benefit of a specific customized overlay for a particular task?</li>
</ul>

<h2>Internet-Scale Monitoring/Querying</h2>
All of the following projects could use
<a href="http://p2.berkeley.intel-research.net">P2</a>
or <a href="http://pier.cs.berkeley.edu">PIER</a> system as an
underlying platform.  Talk with Joe for more information.
<ul> 

<li><b>Distributed Queries in P2</b>.
The <a href="http://pier.cs.berkeley.edu">PIER</a> system implemented
distributed relational queries over Distributed Hash Tables (DHTs).
P2 offers the opportunity to revisit the PIER design, and consider
both (a) implementing distributed relational operators (join,
aggregation, etc.) <i>without</i> a DHT, or (b) opening up the
traditional DHT interface to allow particular relational operators
to perform more efficiently/reliably.</li>

<li><b>Pronghorn: A new generation of P2P Filesharing</b>.  Projects
like PIER and P2 promise p2p-scale querying with the full power of a
language like SQL.  Unfortunately, the queryable data in p2p
filesharing today is impoverished: just short filenames and ID3 tags.
Microsoft's WinFS filesystem (in the upcoming Windows
"Longhorn"/"Vista") promises to change all that by putting a full
relational database in for filesystem metadata.  What P2P filesharing
facilities could be enabled by coupling these two technologies?  Get a
jump on the trend early, and see what technical challenges arise!</b>

<li><b>Distributed Aggregate Triggers</b>.  The challenge here is to
track a distributed property of a distributed system.  For example,
given a p2p application running on <em>n</em> sites, track the sum of
the bandwidth those <em>n</em> sites are imposing in total on any
external site.  Initial ideas on this topic appear in
a <a
href="http://db.cs.berkeley.edu/papers/hotnets04-wakeup.pdf">HotNets
2004 paper</a>; your challenge would be to move substantially beyond
these ideas, perhaps
using <a
href="http://www2.berkeley.intel-research.net/~minos/Papers/debull05.pdf">distributed
sketching</a> ideas implemented
in <a href="http://p2.berkeley.intel-research.net">P2</a>.</li>

<li><b>P2P firewall anomaly detection</b>.  Assume a collection of
end-hosts want to "band together" to look for anomalous network
behaviors.  To this end, they use a P2P query engine to
collaboratively share and query the contents of their firewall logs,
in the hopes of allowing end-users to address high-level questions
like "has something changed?" or "is it just me or is everybody
experiencing something weird?" Define specific collaborative queries
the end-hosts can run to identify anomalous patterns on the network,
and investigate how to efficiently implement them
in <a href="http://p2.berkeley.intel-research.net">P2</a>.</li>

<li><b>Distributed End-Host Clustering</b>. In the spirit of the
previous project, design a distributed clustering algorithm to
automatically group end-hosts in a P2P by various features (traffic
patterns, software versions, firewall traces, etc.) Be able to
continuously track the clusters over time, to enable end-hosts to
determine when they drift from their usual cluster, or when their
entire cluster experiences changes.</li>

</ul>

<h2>Virtual Machines</h2>
<ul>
<li><b>LOX: a library O/S for Xen</b>.
Xen is a GPL-licenced Hypervisor for ia32-architecture machines.  This
project investigates one of the implications of assuming that
hypervisor functionality is part of a computing platform.   Not only
is writing an operating system for a hypervisor much simpler that
writing one for "real" hardware (devices are simple and standardised,
for instance), but it becomes possible to use a highly optimised and
simplified per-application operating system, much like the notion of
an Exokernel "library OS" or a Nemesis domain. 
<br><br>
This project will explore the tradeoffs involved in the design of a
per-application operating system for VMM environments.  Issues to
investigate include: what are the performance benefits (if any) to be
gained for different classes of application?  What design of library
OS is appropriate for (say) a database system?  Or a web server?   Can
such an operating system be built in a modular, customizable manner?
</li>

<li><b>DOX: a device O/S for Xen.</b>
A somewhat different direction to LOX (see project proposal above),
DOX also explores what follows from assuming virtualization technology
is present on a computing platform.   The Xen hypervisor implements
device drivers using existing operating systems: an OS in one virtual
machine (Linux, BSD, Windows) is granted access to the physical
hardware and runs the standard device drivers, and then exports a
"virtual device", usually with some standard format (like a
block-oriented virtual disk) to other VMs. 
<br><br>
There's no reason why different device drivers shouldn't execute in
different virtual machines, under different operating systems.  More
long-term, though, there's no reason why the operating system for a
device driver needs to be a so-called general-purpose system like
Linux or Windows.   This project will looks at questions like:  What
is the appropriate operating system to run inside a Xen domain and
provide high-performance, high robustness virtualization of a complex
I/O device (such as a RAID or SATA controller)?  How can such an OS be
customized to expose the distinctive/unique functionality of such
devices without sacrificing reusability?
</li>
</ul>
<h2>Sensor Networks</h2>
<ul>
<li><b>Epoch scheduling services</b>.  Various data collection tasks
in sensornets work on a fixed schedule of "epochs": time is divided
into epochs, and the sensors must collaborate within each epoch to
achieve some collaborative task.  Typically they are expected to sleep
in power-save mode for most of the epoch, and wake up on a schedule to
communicate.  <a
href="http://telegraph.cs.berkeley.edu/tinydb">TinyDB</a> is an
example of such a design.  There are a variety of challenges in
designing a robust epoch scheduling service.  How do you allocate
wakeup and communication timeslots to the nodes, taking into account
the vagaries of time synchronization, unpredictable task lengths
(e.g. sending variable-sized data), and a scalable, possibly dynamic
population of nodes?  </li>

<li><b>Sketch-based approximate aggregates</b>. Evaluate the practical
use of approximation techniques
like <a
href="http://www2.berkeley.intel-research.net/~minos/Papers/debull05.pdf">distributed
sketches</a> in a real sensornet query implementation.  Consider the
routing opportunities of duplicate-insensitive sketches as well
(e.g. <a
href="http://www.cs.cmu.edu/~manjhi/publications/tributariesDeltas.html">Tributaries
and Deltas</a>.)

<li><b>Source-routed tours in
sensornets</b>. The <a
href="http://db.cs.berkeley.edu/papers/vldb04-model.pdf">BBQ</a>
system proposed using source-routed "tours" of network nodes for data
collection.  Recently, various protocols were designed to make such
tours more robust to failure (see Joe for details).  The practicality
of these protocols remains very much in question.  This project would
evaluate the existing protocol ideas and hopefully improve upon
them.</li>

<li><b>Mixing push and pull in probabilistic
querying</b>. <a
href="http://db.cs.berkeley.edu/papers/vldb04-model.pdf">BBQ</a>
proposed a "pull-oriented" paradigm for probabilistically querying
sensors.  A CS262 project last year proposed a "push-based" paradigm
called Ken, which was recently accepted for publication.  These two
approaches are different; it is unclear how to integrate them
intelligently, and what third approaches might be sensible.</li>
</ul>

<h2>Security and Privacy in Distributed Query Processing</h2>
<ul>
<li><b>Proof Sketches</b>.  We have developed a new technique based on
<a
href="http://www2.berkeley.intel-research.net/~minos/Papers/debull05.pdf">distributed
sketches</a> to prove that the result to a distributed aggregate query
(e.g. a vote, an average computation, etc.) is within epsilon of the
correct result, despite tampering by adversarial aggregators.
However, the idea has limitations with respect to "suppression
attacks" in which data (individual values, or sub-aggregates) are
simply not forwarded along.  Other work on duplicate-insensitive
aggregation
(e.g. <a
href="http://www.cs.cmu.edu/~manjhi/publications/tributariesDeltas.html">Tributaries
and Deltas</a>) has focused on tolerating loss in distributed
aggregation, but has not focused on coordinated suppression attacks.
Clearly, redundancy for duplicate-insensitive messages can mitigate
such attacks; but how do we construct a suitably redundant aggregation
topology (a DAG?  a family of trees?) to provide strong probabilistic
guarantees?  And can we maintain such a topology in the face of
network churn?</li>

<li><b>Privacy and Verifiability in Distributed Querying</b>.
Privacy-preserving multi-party querying has been a hot topic in recent
years (see Rakesh Agrawal's various papers for overviews -- this is a
good starting point).  This work has typically not considered
wide-area environments with multi-hop collaborative execution models,
in which not only is the privacy at issue, but also the veracity of
the answer.  The rather open-ended idea here is to revisit one of the
key themes from this line of work in a distributed context, and
consider the new issues that arise in verifying the correctness of the
query answers while preserving privacy.</li>
</ul>

<h2>Miscellany</h2>
<ul>
<li><b>Disordered Disk I/O</b>.
The use of asynchronous disk I/O API calls to improve performance of
concurrent applications over Unix is well-known - it's almost always a
good idea to let the application get on with something else useful
while it's waiting for the disk to get back.  Less well investigated
are the delays (in particular, latency penalties) resulting from
more subtle ordering constraints on disk I/O imposed by imperative
programming and the I/O interface itself.  For example, a simple
for-loop to sum the records in a file can be terribly inefficient
in disk seeks.  In theory, it doesn't matter in which order the disk
blocks making up the file are read from the disk, so it should be
possible to move the disk arm a minimum number of tracks to get all
the blocks.  The problem here is that the application cannot express
this opportunity for reordering and parallelism to the operating
system. 

<br><br>
Taken to a limit, this project will investigate alternative O/S APIs,
file systems, and device drivers which allow such unordered I/O to be
efficiently specified by (new) applications, using a combination of
techniques which might include continuation support, map/reduce-like
constructs, and new file abstractions which leave record ordering
unbound.  Unlike databases, which tend to focus on throughput
optimization, the emphasis here is reducing latency.  There's plenty
of scope for both a simulation-based study or (better) an
implementation using a modified OS like BSD or Linux over Xen. 
</li>
</ul>

{% include footer.html %}
</body>
</html>
