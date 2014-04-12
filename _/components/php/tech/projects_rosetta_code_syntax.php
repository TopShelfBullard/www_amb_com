<p>
    <!-- 1 .upto(100) do |number|  -->
    <span class="syntax_coloring_dark">1</span>.upto(<span class="syntax_coloring_dark">100</span>)
    <span class="syntax_coloring_medium">do</span>
    |<span class="syntax_coloring_light">number</span>|
    <br>

    <!-- open = false -->
    &nbsp;&nbsp;open
    <span class="syntax_coloring_medium">=</span>
    <span class="syntax_coloring_dark">false</span>
    <br>

    <!-- 1.upto(number) do |divider| -->
    &nbsp;&nbsp;
    <span class="syntax_coloring_dark">1</span>.upto(number)
    <span class="syntax_coloring_medium">do</span>
    |<span class="syntax_coloring_light">divider</span>|
    <br>

    <!-- if number % divider === 0 -->
    &nbsp;&nbsp;&nbsp;&nbsp;
    <span class="syntax_coloring_medium">if</span> number
    <span class="syntax_coloring_medium">%</span> divider
    <span class="syntax_coloring_medium">===</span>
    <span class="syntax_coloring_dark">0</span>
    <br>

    <!-- open = !open -->
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;open
    <span class="syntax_coloring_medium">= !</span>open
    <br>

    <!-- end
    end-->
    &nbsp;&nbsp;&nbsp;&nbsp;
    <span class="syntax_coloring_medium">end
    <br>
    &nbsp;&nbsp;end</span>
    <br>

    <!-- state = open ? "open" : "closed" -->
    &nbsp;&nbsp;state
    <span class="syntax_coloring_medium">=</span> open
    <span class="syntax_coloring_medium">?</span>
    <span class="syntax_coloring_medium_dark">"open"</span> :
    <span class="syntax_coloring_medium_dark">"closed"</span>
    <br>

    <!-- puts "Door number #{number} is #{state}." -->
    &nbsp;&nbsp;puts
    <span class="syntax_coloring_medium_dark">"Door number</span>
    <span class="syntax_coloring_light">#{number}</span>
    <span class="syntax_coloring_medium_dark">is</span>
    <span class="syntax_coloring_light">#{state}.</span>"
    <br>

    <!-- end-->
    <span class="syntax_coloring_medium">end</span>
</p>