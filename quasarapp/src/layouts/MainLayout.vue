<template>
  <q-layout
    view="lHh Lpr fff"
    class="bg-grey-1"
  >
    <q-header
      elevated
      class="bg-white text-grey-8"
      height-hint="64"
    >
      <q-toolbar
        class="GPL__toolbar"
        style="height: 64px"
      >
        <q-btn
          flat
          dense
          round
          @click="toggleLeftDrawer"
          aria-label="Menu"
          icon="menu"
          class="q-mx-md"
        />
        <q-toolbar-title
          v-if="$q.screen.gt.sm"
          shrink
          class="row items-center no-wrap"
        >
          <q-item
            clickable
            to="/"
          >
            <img src="https://cdn.quasar.dev/img/layout-gallery/logo-google.svg">
            <span class="q-ml-sm">Photos</span>
          </q-item>
        </q-toolbar-title>
        <q-space />

        <q-btn-dropdown
          v-if="$q.screen.gt.sm"
          :menu-offset="[300, 5]"
          flat
          outline
          color="grey-8"
          label="Explorar contenido"
        >
          <q-list>
            <q-item
              clickable
              v-close-popup
              @click="onItemClick"
            >
              <q-item-section>
                <q-item-label>Fotos</q-item-label>
              </q-item-section>
            </q-item>
            <q-item
              clickable
              v-close-popup
              @click="onItemClick"
            >
              <q-item-section>
                <q-item-label>Eventos</q-item-label>
              </q-item-section>
            </q-item>
          </q-list>
        </q-btn-dropdown>

        <q-input
          color="black"
          class="GPL__toolbar-input"
          dense
          outlined
          v-model="search"
          placeholder="Search"
        >
          <template v-slot:prepend>
            <q-icon
              v-if="search === ''"
              name="search"
            />
            <q-icon
              v-else
              name="clear"
              class="cursor-pointer"
              @click="search = ''"
            />
          </template>
          <q-btn
            v-if="search !== ''"
            color="grey-9"
            icon="search"
            dense
            flat
            rounded
            :to="`search?kw=${search}`"
          ></q-btn>
          <q-btn
            v-else
            color="grey-9"
            icon="image_search"
            dense
            flat
            rounded
          ></q-btn>
        </q-input>

        <q-space />
        <div class="q-gutter-sm row items-center no-wrap">
          <template v-if="isAuthenticated">
            <q-btn
              round
              dense
              flat
              color="grey-8"
              icon="notifications"
            >
              <q-badge
                v-if="notification.counter > 0"
                color="red"
                text-color="white"
                floating
              >
                {{ notification.counter }}
              </q-badge>
              <q-tooltip>Notifications</q-tooltip>
              <q-menu
                anchor="top end"
                self="top end"
                style="min-width:300px"
              >
                <q-list
                  class="text-grey-8"
                  style="min-width: 250px"
                >
                  <q-item aria-hidden="true">
                    <q-item-section
                      class="text-uppercase text-grey-7"
                      style="font-size: 0.7rem"
                    >Create New</q-item-section>
                  </q-item>
                  <q-item
                    v-for="menu in createMenu"
                    :key="menu.text"
                    clickable
                    v-close-popup
                    aria-hidden="true"
                  >
                    <q-item-section avatar>
                      <q-icon :name="menu.icon" />
                    </q-item-section>
                    <q-item-section>{{ menu.text }}</q-item-section>
                  </q-item>
                </q-list>
              </q-menu>
            </q-btn>
            <Menu />
          </template>
          <template v-else>
            <q-btn
              dense
              flat
              color="black"
              label="Login"
              to="/login"
            />
            <q-btn
              dense
              flat
              color="black"
              label="Register"
              to="/register"
            />
          </template>
          <q-space></q-space>
          <q-btn
            round
            dense
            flat
            color="grey-8"
            icon="shopping_cart"
            @click="openCart"
          >
            <q-badge
              v-if="shopping.counter > 0"
              color="red"
              text-color="white"
              floating
            >
              {{ shopping.counter }}
            </q-badge>
            <q-tooltip>Carrito de compras</q-tooltip>
          </q-btn>
        </div>
      </q-toolbar>
    </q-header>

    <q-drawer
      v-model="leftDrawerOpen"
      bordered
      behavior="mobile"
      @click="leftDrawerOpen = false"
    >
      <q-scroll-area class="fit">
        <q-toolbar class="GPL__toolbar">
          <q-toolbar-title class="row items-center text-grey-8">
            <img
              class="q-pl-md"
              src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg"
            >
            <span class="q-ml-sm">Photos</span>
          </q-toolbar-title>
        </q-toolbar>
        <q-list padding>
          <EssentialLink
            v-for="link in links1"
            :key="link.title"
            v-bind="link"
          />
          <q-separator class="q-my-md" />
          <EssentialLink
            v-for="link in links2"
            :key="link.title"
            v-bind="link"
          />
          <q-separator class="q-my-md" />
          <EssentialLink
            v-for="link in links3"
            :key="link.title"
            v-bind="link"
          />
        </q-list>
      </q-scroll-area>
    </q-drawer>
    <q-page-container class="GPL__page-container">
      <router-view />
    </q-page-container>
  </q-layout>
</template>

<script>
import { ref, computed } from "vue";
import { useRouter } from "vue-router";
import EssentialLink from "../components/EssentialLink.vue";
import shoppingStore from "stores/shopping";
import notificationStore from "stores/notification";
import { useAuthStore } from "stores/auth";
import Menu from "./Menu.vue";

export default {
  name: "GooglePhotosLayout",
  components: {
    EssentialLink,
    Menu,
  },
  setup() {
    const router = useRouter();

    const shopping = ref(shoppingStore());
    const notification = ref(notificationStore());

    const authStore = useAuthStore();
    const isAuthenticated = computed(() => authStore.isAuthenticated);
    const user = computed(() => authStore.user);

    const leftDrawerOpen = ref(false);
    const search = ref("");
    const storage = ref(0.26);

    function toggleLeftDrawer() {
      leftDrawerOpen.value = !leftDrawerOpen.value;
    }

    const openCart = () => {
      router.push("/shoppingcart");
    };

    return {
      isAuthenticated,
      shopping,
      notification,

      leftDrawerOpen,
      search,
      storage,

      links1: [
        {
          title: "Photo",
          caption: "photos",
          icon: "photo",
          link: "#/photos",
        },
        {
          title: "Albums",
          caption: "organiza tus fotos",
          icon: "photo_album",
          link: "#/albums",
        },
        {
          title: "Events",
          caption: "tus eventos como organizador",
          icon: "book",
          link: "#/events",
        },
      ],
      links2: [
        {
          title: "Panel de administracion",
          caption: "gestiona tus actividades como fototgrafo",
          icon: "archive ",
          link: "#/padmin",
        },
        {
          title: "Compras",
          caption: "tus compras",
          icon: "shopping_cart",
          link: "#/get_app",
        },
      ],
      links3: [
        {
          title: "Perfil",
          caption: "tu informacion personal",
          icon: "person",
          link: "#/profile",
        },
        {
          title: "Help & Feedback",
          caption: "ayuda y preguntas frecuentes",
          icon: "help",
          link: "#/help",
        },
        {
          title: "App Downloads",
          caption: "descarga la app para android",
          icon: "get_app",
          link: "#/get_app",
        },
      ],

      toggleLeftDrawer,
      openCart,
    };
  },
};
</script>

<style lang="sass">
.GPL

    &__toolbar
        height: 64px

    &__toolbar-input
        width: 50%

    &__drawer-item
        line-height: 24px
        border-radius: 0 24px 24px 0
        margin-right: 12px

    .q-item__section--avatar
        padding-left: 12px
    .q-icon
        color: #5f6368

    .q-item__label:not(.q-item__label--caption)
        color: #3c4043
        letter-spacing: .01785714em
        font-size: .875rem
        font-weight: 500
        line-height: 1.25rem

    &--storage
        border-radius: 0
        margin-right: 0
        padding-top: 24px
        padding-bottom: 24px

    &__side-btn
    &__label
        font-size: 12px
        line-height: 24px
        letter-spacing: .01785714em
        font-weight: 500

    @media (min-width: 1024px)
    &__page-container
</style>
