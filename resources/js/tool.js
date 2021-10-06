Nova.booting((Vue, router, store) => {
  router.addRoutes([
    {
      name: 'vimeo-video-manager',
      path: '/vimeo-video-manager',
      component: require('./components/Tool'),
    },
  ])
})
