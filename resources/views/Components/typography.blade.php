<x-app-layout>
<div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Display headings</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#typography-1" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="typography-1">
                           <div class="card"><kbd class="bg-dark"><pre id="display-heading" class="text-white"><code>
&#x3C;h1 class=&#x22;display-1&#x22;&#x3E;Display headings&#x3C;/h1&#x3E;
&#x3C;h1 class=&#x22;display-2&#x22;&#x3E;Display headings&#x3C;/h1&#x3E;
&#x3C;h1 class=&#x22;display-3&#x22;&#x3E;Display headings&#x3C;/h1&#x3E;
&#x3C;h1 class=&#x22;display-4&#x22;&#x3E;Display headings&#x3C;/h1&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>Traditional heading elements are designed to work best in the meat of your page content. When you need a heading to stand out, consider using a <strong>display heading</strong>—a larger, slightly more opinionated heading style. Keep in mind these headings are not responsive by default, but it’s possible to enable <a href="https://getbootstrap.com/" target="_blank">responsive font sizes</a>.</p>
                     <h1 class="display-1">Display headings</h1>
                     <h1 class="display-2">Display headings</h1>
                     <h1 class="display-3">Display headings</h1>
                     <h1 class="display-4">Display headings</h1>
                  </div>
               </div>
            </div>
            <div class="col-sm-6">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Typography</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#typography-2" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="typography-2">
                           <div class="card"><kbd class="bg-dark"><pre id="typography" class="text-white"><code>
&#x3C;h1&#x3E;h1. Bootstrap heading&#x3C;/h1&#x3E;
&#x3C;h2&#x3E;h2. Bootstrap heading&#x3C;/h2&#x3E;
&#x3C;h3&#x3E;h3. Bootstrap heading&#x3C;/h3&#x3E;
&#x3C;h4&#x3E;h4. Bootstrap heading&#x3C;/h4&#x3E;
&#x3C;h5&#x3E;h5. Bootstrap heading&#x3C;/h5&#x3E;
&#x3C;h6 class=&#x22;mb-0&#x22;&#x3E;h6. Bootstrap heading&#x3C;/h6&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available.</p>
                     <h1>h1. Bootstrap heading</h1>
                     <h2>h2. Bootstrap heading</h2>
                     <h3>h3. Bootstrap heading</h3>
                     <h4>h4. Bootstrap heading</h4>
                     <h5>h5. Bootstrap heading</h5>
                     <h6 class="mb-0">h6. Bootstrap heading</h6>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Inline text elements</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#typography-3" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="typography-3">
                           <div class="card"><kbd class="bg-dark"><pre id="inline-text-element" class="text-white"><code>
&#x3C;p&#x3E;Styling for common inline HTML5 elements.&#x3C;/p&#x3E;
&#x3C;p&#x3E;You can use the mark tag to &#x3C;mark&#x3E;highlight&#x3C;/mark&#x3E; text.&#x3C;/p&#x3E;
&#x3C;p&#x3E;&#x3C;del&#x3E;This line of text is meant to be treated as deleted text.&#x3C;/del&#x3E;&#x3C;/p&#x3E;
&#x3C;p&#x3E;&#x3C;s&#x3E;This line of text is meant to be treated as no longer accurate.&#x3C;/s&#x3E;&#x3C;/p&#x3E;
&#x3C;p&#x3E;&#x3C;ins&#x3E;This line of text is meant to be treated as an addition to the document.&#x3C;/ins&#x3E;&#x3C;/p&#x3E;
&#x3C;p&#x3E;&#x3C;u&#x3E;This line of text will render as underlined&#x3C;/u&#x3E;&#x3C;/p&#x3E;
&#x3C;p&#x3E;&#x3C;small&#x3E;This line of text is meant to be treated as fine print.&#x3C;/small&#x3E;&#x3C;/p&#x3E;
&#x3C;p&#x3E;&#x3C;strong&#x3E;This line rendered as bold text.&#x3C;/strong&#x3E;&#x3C;/p&#x3E;
&#x3C;p&#x3E;&#x3C;em&#x3E;This line rendered as italicized text.&#x3C;/em&#x3E;&#x3C;/p&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>Styling for common inline HTML5 elements.</p>
                     <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                     <p><del>This line of text is meant to be treated as deleted text.</del></p>
                     <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                     <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                     <p><u>This line of text will render as underlined</u></p>
                     <p><small>This line of text is meant to be treated as fine print.</small></p>
                     <p><strong>This line rendered as bold text.</strong></p>
                     <p><em>This line rendered as italicized text.</em></p>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Lists Inline</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#typography-4" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="typography-4">
                           <div class="card"><kbd class="bg-dark"><pre id="list-inline" class="text-white"><code>
&#x3C;ul class=&#x22;list-inline&#x22;&#x3E;
   &#x3C;li class=&#x22;list-inline-item&#x22;&#x3E;Lorem ipsum&#x3C;/li&#x3E;
   &#x3C;li class=&#x22;list-inline-item&#x22;&#x3E;Phasellus iaculis&#x3C;/li&#x3E;
   &#x3C;li class=&#x22;list-inline-item&#x22;&#x3E;Nulla volutpat&#x3C;/li&#x3E;
&#x3C;/ul&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>Remove a list’s bullets and apply some light <code>margin</code> with a combination of two classes, <code>.list-inline</code> and <code>.list-inline-item</code>.</p>
                     <ul class="list-inline">
                        <li class="list-inline-item">Lorem ipsum</li>
                        <li class="list-inline-item">Phasellus iaculis</li>
                        <li class="list-inline-item">Nulla volutpat</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-sm-6">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Headings</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#typography-5" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="typography-5">
                           <div class="card"><kbd class="bg-dark"><pre id="heading" class="text-white"><code>
&#x3C;p class=&#x22;h1 mb-3&#x22;&#x3E;h1. Bootstrap heading&#x3C;/p&#x3E;
&#x3C;p class=&#x22;h2 mb-3&#x22;&#x3E;h2. Bootstrap heading&#x3C;/p&#x3E;
&#x3C;p class=&#x22;h3 mb-3&#x22;&#x3E;h3. Bootstrap heading&#x3C;/p&#x3E;
&#x3C;p class=&#x22;h4 mb-3&#x22;&#x3E;h4. Bootstrap heading&#x3C;/p&#x3E;
&#x3C;p class=&#x22;h5 mb-3&#x22;&#x3E;h5. Bootstrap heading&#x3C;/p&#x3E;
&#x3C;p class=&#x22;h6 mb-0&#x22;&#x3E;h6. Bootstrap heading&#x3C;/p&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p><code>.h1</code> through <code>.h6</code> classes are also available, for when you want to match the font styling of a heading but cannot use the associated HTML element.</p>
                     <p class="h1 mb-3">h1. Bootstrap heading</p>
                     <p class="h2 mb-3">h2. Bootstrap heading</p>
                     <p class="h3 mb-3">h3. Bootstrap heading</p>
                     <p class="h4 mb-3">h4. Bootstrap heading</p>
                     <p class="h5 mb-3">h5. Bootstrap heading</p>
                     <p class="h6 mb-0">h6. Bootstrap heading</p>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Lists Unstyled</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#typography-6" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="typography-6">
                           <div class="card"><kbd class="bg-dark"><pre id="lists-unstyled" class="text-white"><code>
&#x3C;ul class=&#x22;list-unstyled&#x22;&#x3E;
   &#x3C;li&#x3E;Lorem ipsum dolor sit amet&#x3C;/li&#x3E;
   &#x3C;li&#x3E;Consectetur adipiscing elit&#x3C;/li&#x3E;
   &#x3C;li&#x3E;Integer molestie lorem at massa&#x3C;/li&#x3E;
   &#x3C;li&#x3E;Facilisis in pretium nisl aliquet&#x3C;/li&#x3E;
   &#x3C;li&#x3E;
      Nulla volutpat aliquam velit
      &#x3C;ul&#x3E;
         &#x3C;li&#x3E;Phasellus iaculis neque&#x3C;/li&#x3E;
         &#x3C;li&#x3E;Purus sodales ultricies&#x3C;/li&#x3E;
         &#x3C;li&#x3E;Vestibulum laoreet porttitor sem&#x3C;/li&#x3E;
         &#x3C;li&#x3E;Ac tristique libero volutpat at&#x3C;/li&#x3E;
      &#x3C;/ul&#x3E;
   &#x3C;/li&#x3E;
   &#x3C;li&#x3E;Faucibus porta lacus fringilla vel&#x3C;/li&#x3E;
   &#x3C;li&#x3E;Aenean sit amet erat nunc&#x3C;/li&#x3E;
   &#x3C;li&#x3E;Eget porttitor lorem&#x3C;/li&#x3E;
&#x3C;/ul&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>Remove the default <code>list-style</code> and left margin on list items (immediate children only). <strong>This only applies to immediate children list items</strong>, meaning you will need to add the class for any nested lists as well.</p>
                     <ul class="list-unstyled">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Integer molestie lorem at massa</li>
                        <li>Facilisis in pretium nisl aliquet</li>
                        <li>
                           Nulla volutpat aliquam velit
                           <ul>
                              <li>Phasellus iaculis neque</li>
                              <li>Purus sodales ultricies</li>
                              <li>Vestibulum laoreet porttitor sem</li>
                              <li>Ac tristique libero volutpat at</li>
                           </ul>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                        <li>Eget porttitor lorem</li>
                     </ul>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Blockquotes</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#typography-7" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="typography-7">
                           <div class="card"><kbd class="bg-dark"><pre id="blockquotes" class="text-white"><code>
&#x3C;blockquote class=&#x22;blockquote&#x22;&#x3E;
   &#x3C;p class=&#x22;mb-0&#x22;&#x3E;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&#x3C;/p&#x3E;
   &#x3C;footer class=&#x22;blockquote-footer&#x22;&#x3E;Someone famous in &#x3C;cite title=&#x22;Source Title&#x22;&#x3E;Source Title&#x3C;/cite&#x3E;&#x3C;/footer&#x3E;
&#x3C;/blockquote&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>For quoting blocks of content from another source within your document. Wrap <code>&lt;blockquote class="blockquote"&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote.</p>
                     <blockquote class="blockquote">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                     </blockquote>
                  </div>
               </div>
            </div>
            <div class="col-sm-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Description list alignment</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#typography-8" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="typography-8">
                           <div class="card"><kbd class="bg-dark"><pre id="description-list" class="text-white"><code>
&#x3C;dl class=&#x22;row&#x22;&#x3E;
   &#x3C;dt class=&#x22;col-sm-3&#x22;&#x3E;Description lists&#x3C;/dt&#x3E;
   &#x3C;dd class=&#x22;col-sm-9&#x22;&#x3E;A description list is perfect for defining terms.&#x3C;/dd&#x3E;
   &#x3C;dt class=&#x22;col-sm-3&#x22;&#x3E;Euismod&#x3C;/dt&#x3E;
   &#x3C;dd class=&#x22;col-sm-9&#x22;&#x3E;
      &#x3C;p&#x3E;Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.&#x3C;/p&#x3E;
      &#x3C;p&#x3E;Donec id elit non mi porta gravida at eget metus.&#x3C;/p&#x3E;
   &#x3C;/dd&#x3E;
   &#x3C;dt class=&#x22;col-sm-3&#x22;&#x3E;Malesuada porta&#x3C;/dt&#x3E;
   &#x3C;dd class=&#x22;col-sm-9&#x22;&#x3E;Etiam porta sem malesuada magna mollis euismod.&#x3C;/dd&#x3E;
   &#x3C;dt class=&#x22;col-sm-3 text-truncate&#x22;&#x3E;Truncated term is truncated&#x3C;/dt&#x3E;
   &#x3C;dd class=&#x22;col-sm-9&#x22;&#x3E;Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.&#x3C;/dd&#x3E;
   &#x3C;dt class=&#x22;col-sm-3&#x22;&#x3E;Nesting&#x3C;/dt&#x3E;
   &#x3C;dd class=&#x22;col-sm-9&#x22;&#x3E;
      &#x3C;dl class=&#x22;row&#x22;&#x3E;
         &#x3C;dt class=&#x22;col-sm-4&#x22;&#x3E;Nested definition list&#x3C;/dt&#x3E;
         &#x3C;dd class=&#x22;col-sm-8&#x22;&#x3E;Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.&#x3C;/dd&#x3E;
      &#x3C;/dl&#x3E;
   &#x3C;/dd&#x3E;
&#x3C;/dl&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>Align terms and descriptions horizontally by using our grid system’s predefined classes (or semantic mixins). For longer terms, you can optionally add a <code>.text-truncate</code> class to truncate the text with an ellipsis.</p>
                     <dl class="row mb-0">
                        <dt class="col-sm-3">Description lists</dt>
                        <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
                        <dt class="col-sm-3">Euismod</dt>
                        <dd class="col-sm-9">
                           <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
                           <p>Donec id elit non mi porta gravida at eget metus.</p>
                        </dd>
                        <dt class="col-sm-3">Malesuada porta</dt>
                        <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>
                        <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                        <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                        <dt class="col-sm-3">Nesting</dt>
                        <dd class="col-sm-9">
                           <dl class="row mb-0">
                              <dt class="col-sm-4">Nested definition list</dt>
                              <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                           </dl>
                        </dd>
                     </dl>
                  </div>
               </div>
            </div>
         </div>
      </div>
</x-app-layout>
