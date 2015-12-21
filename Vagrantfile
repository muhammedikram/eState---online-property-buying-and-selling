# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  
  config.vm.box = "precise64"
  config.vm.box_url = "http://files.vagrantup.com/precise64.box"
  
  # Setup shared dir with www-data owner

  config.vm.synced_folder "../estate", "/estate", :user => "www-data", :group => "www-data", mount_options: ["dmode=775,fmode=664"]
  
  

  config.vm.network "private_network", ip: "192.168.56.102"
  


  
  config.vm.provider "virtualbox" do |virtualbox|
    virtualbox.memory = 4096
    virtualbox.cpus   = 1
  end
  
  
  
  # Disable automatic box update checking. If you disable this, then
  # boxes will only be checked for updates when the user runs
  # `vagrant box outdated`. This is not recommended.
  # config.vm.box_check_update = false
  
  config.vm.provider "virtualbox" do |vb|
    # Don't boot with headless mode
    vb.gui = true
  end
  
end