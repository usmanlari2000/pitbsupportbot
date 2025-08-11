<?php
?>

<style>
*, ::after, ::before, ::backdrop, ::file-selector-button {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  border: 0 solid;
}

:root, :host {
  --font-sans: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-mono: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  --color-white: #fff;
  --spacing: 0.25rem;
  --text-sm: 0.875rem;
  --text-sm--line-height: 1.25;
  --text-lg: 1.125rem;
  --text-lg--line-height: 1.75;
  --radius-md: 0.375rem;
  --radius-xl: 0.75rem;
  --default-transition-duration: 150ms;
  --default-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  --default-font-family: var(--font-sans);
  --default-mono-font-family: var(--font-mono);
}

html, :host {
  line-height: 1.5;
  -webkit-text-size-adjust: 100%;
  tab-size: 4;
  font-family: var(--default-font-family, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji");
  -webkit-tap-highlight-color: transparent;
}

button, input, select, optgroup, textarea {
  font: inherit;
  color: inherit;
  border-radius: 0;
  background-color: transparent;
  opacity: 1;
  border: none;
  outline: none;
}

img, svg, video, canvas, audio, iframe, embed, object {
  display: block;
  vertical-align: middle;
}

.pointer-events-none { pointer-events: none; }
.absolute { position: absolute; }
.fixed { position: fixed; }
.relative { position: relative; }
.top-1\/2 { top: 50%; }
.top-px { top: 1px; }
.right-3 { right: calc(var(--spacing) * 3); }
.bottom-3 { bottom: calc(var(--spacing) * 3); }
.bottom-\[68px\] { bottom: 68px; }
.left-1\/2 { left: 50%; }
.z-50 { z-index: 50; }
.flex { display: flex; }
.h-5 { height: calc(var(--spacing) * 5); }
.h-9 { height: calc(var(--spacing) * 9); }
.h-10 { height: calc(var(--spacing) * 10); }
.h-12 { height: calc(var(--spacing) * 12); }
.h-96 { height: calc(var(--spacing) * 96); }
.h-full { height: 100%; }
.w-5 { width: calc(var(--spacing) * 5); }
.w-9 { width: calc(var(--spacing) * 9); }
.w-12 { width: calc(var(--spacing) * 12); }
.w-72 { width: calc(var(--spacing) * 72); }
.w-fit { width: fit-content; }
.w-full { width: 100%; }
.max-w-4\/5 { max-width: 80%; }
.flex-1 { flex: 1; }

.-translate-x-1\/2 { transform: translateX(-50%) translateY(var(--tw-translate-y, 0)); }
.-translate-y-1\/2 { transform: translateX(var(--tw-translate-x, 0)) translateY(-50%); }
.translate-y-1 { transform: translateX(var(--tw-translate-x, 0)) translateY(calc(var(--spacing) * 1)); }
.-rotate-45 { transform: translateX(var(--tw-translate-x, 0)) translateY(var(--tw-translate-y, 0)) rotate(-45deg); }
.rotate-45 { transform: translateX(var(--tw-translate-x, 0)) translateY(var(--tw-translate-y, 0)) rotate(45deg); }

.cursor-pointer { cursor: pointer; }
.flex-col { flex-direction: column; }
.items-center { align-items: center; }
.justify-center { justify-content: center; }
.justify-end { justify-content: flex-end; }
.justify-start { justify-content: flex-start; }
.gap-x-2 { column-gap: calc(var(--spacing) * 2); }
.gap-y-4 { row-gap: calc(var(--spacing) * 4); }
.overflow-auto { overflow: auto; }
.overflow-hidden { overflow: hidden; }
.rounded-full { border-radius: 9999px; }
.rounded-md { border-radius: var(--radius-md); }
.rounded-xl { border-radius: var(--radius-xl); }
.bg-\[\#00684a\] { background-color: #00684a; }
.bg-\[\#f5f5f5\] { background-color: #f5f5f5; }
.bg-white { background-color: var(--color-white); }
.p-2 { padding: calc(var(--spacing) * 2); }
.px-2 { padding-left: calc(var(--spacing) * 2); padding-right: calc(var(--spacing) * 2); }
.px-3 { padding-left: calc(var(--spacing) * 3); padding-right: calc(var(--spacing) * 3); }
.px-4 { padding-left: calc(var(--spacing) * 4); padding-right: calc(var(--spacing) * 4); }
.py-2 { padding-top: calc(var(--spacing) * 2); padding-bottom: calc(var(--spacing) * 2); }
.py-4 { padding-top: calc(var(--spacing) * 4); padding-bottom: calc(var(--spacing) * 4); }
.pr-0\.5 { padding-right: calc(var(--spacing) * 0.5); }
.text-lg { font-size: var(--text-lg); line-height: var(--text-lg--line-height); }
.text-sm { font-size: var(--text-sm); line-height: var(--text-sm--line-height); }
.break-words { overflow-wrap: break-word; }
.text-\[\#666\] { color: #666; }
.text-\[\#171717\] { color: #171717; }
.text-white { color: var(--color-white); }
.opacity-0 { opacity: 0; }

.shadow-\[0px_0px_0px_1px_\#00000014\,0px_1px_1px_0px_\#00000005\,0px_4px_8px_-4px_\#0000000a\,0px_16px_24px_-8px_\#0000000f\] {
  box-shadow: 0px 0px 0px 1px #00000014, 0px 1px 1px 0px #00000005, 0px 4px 8px -4px #0000000a, 0px 16px 24px -8px #0000000f;
}
.shadow-\[0px_0px_0px_1px_\#00000014\] {
  box-shadow: 0px 0px 0px 1px #00000014;
}

.transition-all {
  transition-property: all;
  transition-timing-function: var(--default-transition-timing-function);
  transition-duration: var(--default-transition-duration);
}
.duration-200 { transition-duration: 200ms; }

#chatbot-input:focus { outline: none; }
#chatbot-submit:disabled { opacity: 0.5; }

@media (min-width: 640px) {
  .sm\:right-6 { right: calc(var(--spacing) * 6); }
  .sm\:bottom-6 { bottom: calc(var(--spacing) * 6); }
  .sm\:bottom-20 { bottom: calc(var(--spacing) * 20); }
  .sm\:h-\[448px\] { height: 448px; }
  .sm\:w-80 { width: calc(var(--spacing) * 80); }
}

.-translate-x-1\/2.-translate-y-1\/2 {
  transform: translateX(-50%) translateY(-50%);
}
</style>

<button
  id="chatbot-button"
  class="bg-[#00684a] bottom-3 cursor-pointer fixed h-12 right-3 rounded-full shadow-[0px_0px_0px_1px_#00000014] sm:bottom-6 sm:right-6 w-12 z-50"
>
  <div class="relative">
    <svg
      id="chat-icon"
      stroke="currentColor"
      fill="currentColor"
      stroke-width="0"
      viewBox="0 0 512 512"
      class="-translate-x-1/2 -translate-y-1/2 absolute h-5 left-1/2 text-white top-1/2 transition-all w-5"
      height="1em"
      width="1em"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path d="M128 464v-80H56a24 24 0 0 1-24-24V72a24 24 0 0 1 24-24h400a24 24 0 0 1 24 24v288a24 24 0 0 1-24 24H245.74zM456 80z"></path>
    </svg>
    <svg
      id="close-icon"
      stroke="currentColor"
      fill="currentColor"
      stroke-width="0"
      viewBox="0 0 448 512"
      class="-rotate-45 -translate-x-1/2 -translate-y-1/2 absolute h-5 left-1/2 opacity-0 text-white top-1/2 transition-all w-5"
      height="1em"
      width="1em"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
    </svg>
  </div>
</button>

<div
  id="chatbot-widget"
  class="bg-white bottom-[68px] duration-200 fixed flex flex-col h-96 opacity-0 overflow-hidden pointer-events-none right-3 rounded-xl shadow-[0px_0px_0px_1px_#00000014,0px_1px_1px_0px_#00000005,0px_4px_8px_-4px_#0000000a,0px_16px_24px_-8px_#0000000f] sm:bottom-20 sm:h-[448px] sm:right-6 sm:w-80 transition-all translate-y-1 w-72 z-50"
>
  <div class="bg-[#00684a] h-12">
    <div class="flex gap-x-2 h-full items-center px-4 py-2 w-full">
      <svg
        stroke="currentColor"
        fill="currentColor"
        stroke-width="0"
        viewBox="0 0 24 24"
        class="relative text-lg text-white top-px"
        height="1em"
        width="1em"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path d="M13.5 2C13.5 2.44425 13.3069 2.84339 13 3.11805V5H18C19.6569 5 21 6.34315 21 8V18C21 19.6569 19.6569 21 18 21H6C4.34315 21 3 19.6569 3 18V8C3 6.34315 4.34315 5 6 5H11V3.11805C10.6931 2.84339 10.5 2.44425 10.5 2C10.5 1.17157 11.1716 0.5 12 0.5C12.8284 0.5 13.5 1.17157 13.5 2ZM0 10H2V16H0V10ZM24 10H22V16H24V10ZM9 14.5C9.82843 14.5 10.5 13.8284 10.5 13C10.5 12.1716 9.82843 11.5 9 11.5C8.17157 11.5 7.5 12.1716 7.5 13C7.5 13.8284 8.17157 14.5 9 14.5ZM16.5 13C16.5 12.1716 15.8284 11.5 15 11.5C14.1716 11.5 13.5 12.1716 13.5 13C13.5 13.8284 14.1716 14.5 15 14.5C15.8284 14.5 16.5 13.8284 16.5 13Z"></path>
      </svg>
      <span class="text-sm text-white">SupportBot</span>
    </div>
  </div>

  <div class="flex flex-1 flex-col gap-y-4 overflow-auto px-2 py-4" id="messages-container">
    <div class="flex justify-start">
      <div class="bg-[#f5f5f5] break-words max-w-4/5 px-3 py-2 rounded-md text-[#171717] text-sm">
        Hello! How can I assist you today?
      </div>
    </div>
    <div id="messages-end"></div>
  </div>

  <div class="p-2">
    <div id="chatbot-form" class="flex h-10 rounded-full shadow-[0px_0px_0px_1px_#00000014]">
      <input
        id="chatbot-input"
        class="flex-1 h-full px-3 rounded-full text-sm"
        name="input"
        value=""
        autocomplete="off"
        placeholder="Ask anything..."
      />
      <div class="flex h-full items-center pr-0.5">
        <button
          id="chatbot-submit"
          class="bg-[#00684a] cursor-pointer flex h-9 items-center justify-center rounded-full w-9"
          type="button"
          disabled
        >
          <svg
            stroke="currentColor"
            fill="currentColor"
            stroke-width="0"
            viewBox="0 0 448 512"
            class="text-sm text-white"
            height="1em"
            width="1em"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>
</div>

<script>
let isWidgetOpen = false;
let messages = [
  {
    _id: Date.now(),
    content: "Hello! How can I assist you today?",
    role: "assistant",
  }
];
let input = "";
let isPending = false;

let buttonRef = null;
let widgetRef = null;
let messagesEndRef = null;
let inputRef = null;
let submitRef = null;
let chatIcon = null;
let closeIcon = null;

function initializeChatbot() {
  buttonRef = document.getElementById('chatbot-button');
  widgetRef = document.getElementById('chatbot-widget');
  messagesEndRef = document.getElementById('messages-end');
  inputRef = document.getElementById('chatbot-input');
  submitRef = document.getElementById('chatbot-submit');
  chatIcon = document.getElementById('chat-icon');
  closeIcon = document.getElementById('close-icon');

  if (!buttonRef || !widgetRef || !inputRef || !submitRef) {
    console.error('Chatbot elements not found');
    return;
  }

  buttonRef.addEventListener('click', toggleWidget);
  document.addEventListener('mousedown', handleClickOutside);
  submitRef.addEventListener('click', handleSubmit);
  inputRef.addEventListener('input', handleInputChange);
  inputRef.addEventListener('keydown', function(e) {
    if (e.key === 'Enter' && !e.shiftKey) {
      e.preventDefault();
      handleSubmit();
    }
  });
  renderMessages();
}

function handleClickOutside(event) {
  if (isWidgetOpen && buttonRef && !buttonRef.contains(event.target) && widgetRef && !widgetRef.contains(event.target)) {
    setIsWidgetOpen(false);
  }
}

function toggleWidget() {
  setIsWidgetOpen(!isWidgetOpen);
}

function setIsWidgetOpen(open) {
  isWidgetOpen = open;
  
  if (isWidgetOpen) {
    widgetRef.classList.remove('opacity-0', 'translate-y-1', 'pointer-events-none');
    chatIcon.classList.add('opacity-0', 'rotate-45');
    closeIcon.classList.remove('-rotate-45', 'opacity-0');
    inputRef.focus();
  } else {
    widgetRef.classList.add('opacity-0', 'translate-y-1', 'pointer-events-none');
    chatIcon.classList.remove('opacity-0', 'rotate-45');
    closeIcon.classList.add('-rotate-45', 'opacity-0');
  }
}

function handleInputChange() {
  input = inputRef.value;
  updateSubmitButton();
}

function updateSubmitButton() {
  submitRef.disabled = isPending || !input.trim();
}

function scrollToBottom() {
  if (messagesEndRef) {
    messagesEndRef.scrollIntoView({ behavior: 'smooth' });
  }
}

function renderMessages() {
  const messagesContainer = document.getElementById('messages-container');
  while (messagesContainer.firstChild) {
      messagesContainer.removeChild(messagesContainer.firstChild);
  }

  messages.forEach(message => {
    const escapedContent = escapeHtml(message.content);
    const isUser = message.role === 'user';

    const messageWrapper = document.createElement('div');
    messageWrapper.className = `flex ${isUser ? 'justify-end' : 'justify-start'}`;

    const messageBubble = document.createElement('div');
    messageBubble.className = `break-words max-w-4/5 px-3 py-2 rounded-md text-sm ${isUser ? 'bg-[#00684a] text-white' : 'bg-[#f5f5f5] text-[#171717]'}`;
    
    messageBubble.innerHTML = escapedContent; 
    
    messageWrapper.appendChild(messageBubble);
    messagesContainer.appendChild(messageWrapper);
  });
  
  if (isPending) {
    const typingIndicator = document.createElement('div');
    typingIndicator.className = 'flex justify-start';
    typingIndicator.innerHTML = `
      <div class="bg-[#f5f5f5] max-w-4/5 px-3 py-2 rounded-md text-[#666] text-sm w-fit">
        Typing...
      </div>
    `;
    messagesContainer.appendChild(typingIndicator);
  }

  const endDiv = document.createElement('div');
  endDiv.id = 'messages-end';
  messagesContainer.appendChild(endDiv);
  
  messagesEndRef = endDiv;
  setTimeout(scrollToBottom, 100);
}


function escapeHtml(text) {
  const div = document.createElement('div');
  div.textContent = text;
  return div.innerHTML;
}

async function handleSubmit() {
  if (!input.trim() || isPending) {
    return;
  }
  
  const userMessage = { 
    _id: Date.now(), 
    content: input, 
    role: "user" 
  };
  
  messages.push(userMessage);
  inputRef.value = '';
  input = '';
  isPending = true;
  
  renderMessages();
  updateSubmitButton();
  
  try {
    const res = await fetch('/api/chat/index.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        messages: messages,
      }),
    });
    
    if (!res.ok) {
      throw new Error(`${res.status} ${res.statusText}`);
    }
    
    const { output } = await res.json();
    
    const assistantMessage = {
      _id: Date.now() + 1,
      content: output || "Sorry, I'm unable to respond right now.",
      role: "assistant",
    };
    
    messages.push(assistantMessage);
  } catch (err) {
    console.error('Chat API error:', err);
    messages.push({
      _id: Date.now() + 1,
      content: "Sorry, I'm unable to respond right now.",
      role: "assistant",
    });
  } finally {
    isPending = false;
    renderMessages();
    updateSubmitButton();
  }
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initializeChatbot);
} else {
  initializeChatbot();
}
</script>