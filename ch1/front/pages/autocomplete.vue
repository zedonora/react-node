<template>
  <div class="wrap">
    <div id="app" v-on:keyup.down="selectValue('down')" v-on:keyup.up="selectValue('up')">
      <div class="search">
        <input class="s" placeholder="검색어를 입력하세요." v-on:input="searchQueryFn" />
        <ul class="r" tabindex="0" v-bind:class="{ show: isActive }" v-on:mouseover="removeValue">
          <li
            tabindex="-1"
            v-for="(el, index) in filterList"
            v-on:click="changeValue(el.name)"
            v-on:keyup.enter="selectValue('enter', el.name)"
            v-bind:key="index"
          >
            <span>{{ el.name }} {{el.id}}</span>
          </li>
        </ul>
        <p>
          Console:
          <strong>On</strong>
        </p>
      </div>
    </div>
    <button id="searchBtn" class="searchBtn" @click="selectAllValue()">검색</button>
  </div>
</template>

<script>
export default {
  name: "App",
  data: function() {
    return {
      isActive: false,
      searchQuery: "",
      names: names,
      isButton: false
    };
  },
  methods: {
    changeValue(str) {
      console.log(`change value: ${str}`);
      this.isActive = false;
      document.querySelector(".s").value = str;
    },
    searchQueryFn(e) {
      this.searchQuery = e.target.value;
    },
    selectValue(keycode, str) {
      if (this.isActive === true) {
        const hasClass = document.querySelector(".r").classList.contains("key");
        if (keycode === "down") {
          if (!hasClass) {
            const thisEl = document.querySelectorAll(".r li")[0];
            document.querySelector(".r").classList.add("key");
            thisEl.classList.add("sel");
            thisEl.focus();
          } else {
            const lastEl = document.querySelector(".r li:last-child");
            const thisEl = document.querySelector(".r li.sel");
            const nextEl = thisEl.nextElementSibling;
            if (!lastEl.classList.contains("sel")) {
              thisEl.classList.remove("sel");
              nextEl.classList.add("sel");
              nextEl.focus();
            }
          }
        }
        if (keycode === "up" && hasClass) {
          const firstEl = document.querySelectorAll(".r li")[0];
          const thisEl = document.querySelector(".r li.sel");
          const prevEl = thisEl.previousElementSibling;
          if (!firstEl.classList.contains("sel")) {
            thisEl.classList.remove("sel");
            prevEl.classList.add("sel");
            prevEl.focus();
          } else {
            document.querySelector(".s").focus();
          }
        }
        if (keycode === "enter" && hasClass) {
          this.changeValue(str);
        }
      }
    },
    selectAllValue() {
      this.isButton = true;
    },
    removeValue() {
      if (document.querySelector(".r").classList.contains("key")) {
        document.querySelector(".r").classList.remove("key");
        document.querySelector(".r li.sel").classList.remove("sel");
      }
    },
    getList(btn) {
      const str = this.searchQuery;
      const reg = /[^가-힣ㄱ-ㅎㅏ-ㅣa-zA-Z0-9|\s]/.test(str);
      console.log(`typing value: ${str}`);
      if (reg === false && str !== "" && str !== " ") {
        this.isActive = true;
        return this.names.filter(el => {
          return el.name.startsWith(str);
        });
      } else if (this.isButton) {
        this.isActive = true;
        this.isButton = false;
        return this.names;
      } else {
        this.isActive = false;
      }
    }
  },
  computed: {
    filterList: function() {
      return this.getList();
    }
  }
};
var names = [
  { id: 1, name: "김건모 잘못된 만남" },
  { id: 2, name: "홍길동" },
  { id: 3, name: "손오공" },
  { id: 4, name: "공민지" },
  { id: 5, name: "장동건" },
  { id: 6, name: "장희빈" },
  { id: 7, name: "고추장" },
  { id: 8, name: "된장" },
  { id: 9, name: "장장" },
  { id: 10, name: "희야" }
];
</script>

<style>
html,
body {
  height: 100%;
}

body {
  background-color: #ddd;
  font-size: 14px;
  color: #333;
}

strong {
  font-weight: bold;
}

.wrap {
  display: table;
  padding: 200px 20px;
  width: 100%;
  height: 100%;
  box-sizing: border-box;
}

#app {
  display: table-cell;
  vertical-align: middle;
  text-align: center;
}
#app .search {
  position: relative;
  margin: 0 auto;
  width: 100%;
  max-width: 600px;
}
#app .search .s {
  padding: 10px 20px;
  width: 100%;
  max-width: 600px;
  height: 60px;
  box-sizing: border-box;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
  border: 1px solid #888;
  font-size: 16px;
}
#app .search .r {
  display: none;
  position: absolute;
  left: 0;
  top: 60px;
  width: 100%;
  height: 156px;
  overflow-y: auto;
}
#app .search .r.show {
  display: block;
}
#app .search .r li {
  margin-top: -1px;
  padding: 0 20px;
  width: 100%;
  height: 40px;
  background-color: #fff;
  box-sizing: border-box;
  border: 1px solid #888;
  outline: none;
  font-size: 16px;
  line-height: 40px;
  cursor: pointer;
}
#app .search .r li:hover,
#app .search .r li.sel {
  background-color: #f2f2f2;
}
#app .search p {
  padding: 10px 0;
  text-align: right;
  font-size: 12px;
}
.searchBtn {
  width: 60px;
  height: 60px;
  margin-left: 10px;
}
</style>